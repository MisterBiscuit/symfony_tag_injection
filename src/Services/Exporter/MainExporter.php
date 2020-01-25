<?php

namespace App\Services\Exporter;

class MainExporter
{
    public function export(array $data)
    {
        return json_encode($data);
    }
}
