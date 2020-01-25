<?php

namespace App\Services\Exporter\Extractors;

class FourthExtractor implements ExtractorInterface
{
    public function extract(): array
    {
        return [
            'name' => 'fourth',
            'number' => 4,
        ];
    }

    public function getFormat(): string
    {
        return 'pdf';
    }

    public function getFilename(): string
    {
        return 'fourth';
    }
}
