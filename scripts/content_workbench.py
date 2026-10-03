"""Eenmalige auteurswerkbank voor nieuwe cursusinhoud; geen applicatielogica."""
import json
import sys
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1] / 'content/modules'

def save(module_id, *, question, summary, goals, glossary, formulas, lessons, exercises, quiz, timeline=(), people=(), minutes=150):
    if len(sys.argv)>1 and str(module_id) not in sys.argv[1:]:
        return
    directory = next(ROOT.glob(f'{module_id:02}-*'))
    metadata = json.loads((directory / 'module.json').read_text(encoding='utf-8'))
    metadata.update(core_question=question, summary=summary, learning_goals=goals,
                    glossary=[dict(term=t, definition=d) for t,d in glossary],
                    formulas=[dict(name=n, latex=l, usage=u) for n,l,u in formulas],
                    lessons=[], timeline=list(timeline), mathematicians=list(people), estimated_minutes=minutes)
    for slug,title,kind,body,ids in lessons:
        filename = f'{len(metadata["lessons"])+1:02}-{slug}.md'
        metadata['lessons'].append(dict(slug=slug,title=title,kind=kind,file=filename))
        placed = '\n\n'.join('{{ exercises: '+', '.join(f'{module_id:02}-{i:03}' for i in group)+' }}' for group in ids)
        (directory / filename).write_text(body.strip()+'\n\n'+placed+'\n', encoding='utf-8')
    def convert(rows, is_quiz=False):
        result=[]
        for i,row in enumerate(rows,1):
            q,a,steps,hints,opts=row
            entry=dict(id=f'{module_id:02}-'+(f'T{i:02}' if is_quiz else f'{i:03}'),
                       question=q, answer=a, solution=steps, hints=[] if is_quiz else hints,
                       type='numeric', mode='independent' if is_quiz else 'guided',
                       difficulty=1, topics=[metadata['topics'][0]], **{})
            entry.update(opts)
            if entry['type']=='multiple': entry['parts']=entry.pop('answer')
            result.append(entry)
        return result
    (directory/'exercises.json').write_text(json.dumps({'exercises':convert(exercises)},ensure_ascii=False,indent=2)+'\n',encoding='utf-8')
    (directory/'quiz.json').write_text(json.dumps({'title':'Hoofdstuktoets – '+metadata['title'],
        'intro':'15 vragen. Vul zelf je antwoorden in. Na het inleveren zie je je resultaat en de uitgewerkte oplossingen.',
        'questions':convert(quiz,True)},ensure_ascii=False,indent=2)+'\n',encoding='utf-8')
    metadata['status']='available'
    (directory/'module.json').write_text(json.dumps(metadata,ensure_ascii=False,indent=2)+'\n',encoding='utf-8')
    print(f'Module {module_id}: {len(lessons)} lessen, {len(exercises)} oefeningen, {len(quiz)} toetsvragen.')

def e(q,a,steps,hints=(),**options):
    return q,a,list(steps),list(hints),options

def p(*values):
    return [dict(label=k, answer=v, type='numeric') for k,v in values]

def fraction(q,a,steps,hints=(),**opts):
    return e(q,a,steps,hints,type='fraction',**opts)

def expr(q,a,steps,hints=(),**opts):
    return e(q,a,steps,hints,type='expression',**opts)

