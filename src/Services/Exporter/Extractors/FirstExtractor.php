<?php

namespace App\Services\Exporter\Extractors;

class FirstExtractor implements ExtractorInterface
{
    public function extract(): array
    {
        return [
            'name' => 'first',
            'number' => 1,
        ];
    }

    public function getFormat(): string
    {
        return 'pdf';
    }

    public function getFilename(): string
    {
        return 'first';
    }
}
