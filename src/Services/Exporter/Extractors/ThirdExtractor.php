<?php

namespace App\Services\Exporter\Extractors;

class ThirdExtractor implements ExtractorInterface
{
    public function extract(): array
    {
        return [
            'name' => 'third',
            'number' => 3,
        ];
    }

    public function getFormat(): string
    {
        return 'pdf';
    }

    public function getFilename(): string
    {
        return 'third';
    }
}
