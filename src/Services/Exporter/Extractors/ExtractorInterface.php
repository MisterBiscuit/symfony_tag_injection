<?php

namespace App\Services\Exporter\Extractors;

interface ExtractorInterface
{
    public function extract(): array;
    public function getFormat(): string;
    public function getFilename(): string;
}
