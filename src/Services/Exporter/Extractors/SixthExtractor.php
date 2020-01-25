<?php

namespace App\Services\Exporter\Extractors;

class SixthExtractor implements ExtractorInterface
{
    public function extract(): array
    {
        return [
            'name' => 'sixth',
            'number' => 6,
        ];
    }

    public function getFormat(): string
    {
        return 'pdf';
    }

    public function getFilename(): string
    {
        return 'sixth';
    }
}
