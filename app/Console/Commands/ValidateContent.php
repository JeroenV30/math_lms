<?php

namespace App\Console\Commands;

use App\Services\ContentValidator;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('content:validate')]
#[Description('Controleer de cursusinhoud in content/ (bestanden, id\'s, onderwerpen, antwoorden)')]
class ValidateContent extends Command
{
    public function handle(ContentValidator $validator): int
    {
        ['errors' => $errors, 'warnings' => $warnings] = $validator->validate();

        foreach ($warnings as $warning) {
            $this->components->warn($warning);
        }

        foreach ($errors as $error) {
            $this->components->error($error);
        }

        if ($errors === []) {
            $this->components->info('Content is geldig'.($warnings ? ' ('.count($warnings).' waarschuwingen).' : '.'));

            return self::SUCCESS;
        }

        $this->components->error(count($errors).' fouten gevonden.');

        return self::FAILURE;
    }
}
