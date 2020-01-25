<?php

namespace App\Command;

use App\Services\Exporter\MainExporter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunExport extends Command
{
    /** @var MainExporter */
    private $mainExporter;

    /** @var ExtractorInterface[] */
    private $extractors;

    protected static $defaultName = 'app:run-export';

    public function __construct(MainExporter $mainExporter, iterable $extractors = [])
    {
        parent::__construct();
        $this->mainExporter = $mainExporter;
        $this->extractors = $extractors;

        var_dump(count($extractors));
    }

    protected function configure()
    {
        parent::configure();
        $this->setDescription('Runs the export');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('');
        $output->writeln('Running export...');
        $output->writeln('');

        foreach ($this->extractors as $extractor) {
            $output->writeln($extractor->getFilename() . '.' . $extractor->getFormat());
            $data = $extractor->extract();
            $content = $this->mainExporter->export($data);
            var_dump($content);
            $output->writeln('');
        }

        $output->writeln('Done.');
        return 0;
    }
}
