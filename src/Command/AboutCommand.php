<?php

declare(strict_types=1);

namespace Gam6itko\Spiral\SypexGeo\Command;

use Spiral\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Sypex\Geo;

final class AboutCommand extends Command
{
    public const NAME = 'sypex:geo:about';
    public const DESCRIPTION = 'Get information about Sypex Geo file';

    protected function perform(InputInterface $input, OutputInterface $output, Geo $geo): void
    {
        foreach ($geo->about() as $key => $value) {
            if (is_array($value)) {
                $output->writeln("<info>$key</info>:");
                foreach ($value as $k => $v) {
                    $output->writeln("  $k: $v");
                }
                continue;
            }
            $output->writeln("<info>$key</info>: $value");
        }
    }
}
