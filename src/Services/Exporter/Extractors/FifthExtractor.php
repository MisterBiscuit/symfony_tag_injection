<?php

namespace App\Services\Exporter\Extractors;

class FifthExtractor implements ExtractorInterface
{
    public function extract(): array
    {
        return [
            'name' => 'fifth',
            'number' => 5,
        ];
    }

    public function getFormat(): string
    {
        return 'pdf';
    }

    public function getFilename(): string
    {
        return 'fifth';
    }
}
