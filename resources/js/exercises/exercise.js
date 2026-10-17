import { postJson, renderMath } from '../course';

/**
 * Eén oefening: antwoord invoeren, controleren, hints en oplossing bekijken.
 *
 * Begeleid (guided): na een fout antwoord verschijnt automatisch de volgende hint.
 * Zelfstandig (independent) en uitdaging: hints alleen op expliciet verzoek.
 */
export default function exercise(config) {
    return {
        id: config.id,
        mode: config.mode,
        context: config.context ?? 'lesson',
        checkUrl: config.checkUrl,
        hintsTotal: config.hintsTotal ?? 0,
        // Eén tekstveld, bij meerdere invoervelden een object label → antwoord,
        // bij ordenen de items in de huidige volgorde.
        answer: config.items?.length
            ? [...config.items]
            : config.parts?.length ? Object.fromEntries(config.parts.map((label) => [label, ''])) : '',
        status: config.state === 'solved' ? 'previously-solved' : null,
        message: '',
        feedback: '',
        mastery: [],
        hintsShown: 0,
        solutionShown: false,
        busy: false,
        attempts: 0,
        startedAt: null,
        error: false,

        get isCorrect() {
            return this.status === 'correct';
        },

        get canShowHint() {
            return this.hintsShown < this.hintsTotal && !this.isCorrect;
        },

        start() {
            this.startedAt ??= performance.now();
        },

        async check() {
            if (this.busy) return;

            const empty = typeof this.answer === 'string'
                ? this.answer.trim() === ''
                : Object.values(this.answer).every((v) => String(v).trim() === '');

            if (empty) {
                this.status = 'invalid';
                this.message = 'Vul eerst een antwoord in.';
                this.feedback = '';
                return;
            }

            this.busy = true;
            this.error = false;

            try {
                const result = await postJson(this.checkUrl, {
                    answer: this.answer,
                    hints_used: this.hintsShown,
                    solution_viewed: this.solutionShown,
                    context: this.context,
                    response_time: this.startedAt ? Math.round(performance.now() - this.startedAt) : null,
                });

                this.message = result.message;
                this.feedback = result.feedback ?? '';
                this.mastery = result.mastery ?? [];

                if (!result.valid) {
                    this.status = 'invalid';
                } else if (result.correct) {
                    this.status = 'correct';
                    this.attempts++;
                    // Open vraag: laat direct het modelantwoord zien om mee te vergelijken.
                    if (result.code === 'submitted') this.solutionShown = true;
                } else {
                    this.status = 'incorrect';
                    this.attempts++;

                    if (this.mode === 'guided' && this.canShowHint) {
                        this.hintsShown++;
                    }
                }

                this.$nextTick(() => renderMath(this.$el));
            } catch (e) {
                this.error = true;
                this.status = 'invalid';
                this.message = 'Het antwoord kon niet worden gecontroleerd. Draait de server nog?';
            } finally {
                this.busy = false;
            }
        },

        showHint() {
            this.start();
            if (this.canShowHint) this.hintsShown++;
        },

        showSolution() {
            this.start();
            this.solutionShown = true;
        },

        // Ordenen: item i een plek omhoog (-1) of omlaag (+1).
        move(i, step) {
            const j = i + step;
            if (j < 0 || j >= this.answer.length) return;
            [this.answer[i], this.answer[j]] = [this.answer[j], this.answer[i]];
            this.edited();
        },

        edited() {
            this.start();
            if (this.status === 'incorrect' || this.status === 'invalid') {
                this.status = null;
            }
        },
    };
}
