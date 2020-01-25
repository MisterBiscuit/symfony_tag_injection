<?php

namespace App\Services\Exporter\Extractors;

class SecondExtractor implements ExtractorInterface
{
    public function extract(): array
    {
        return [
            'name' => 'second',
            'number' => 2,
        ];
    }

    public function getFormat(): string
    {
        return 'pdf';
    }

    public function getFilename(): string
    {
        return 'second';
    }
}
