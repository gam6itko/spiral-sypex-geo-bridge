<?php

declare(strict_types=1);

namespace Gam6itko\Spiral\SypexGeo\Command;

use Spiral\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Sypex\Geo;

final class GetCityCommand extends Command
{
    public const NAME = 'sypex:geo:get-city-full';
    public const DESCRIPTION = 'Get city name by IP';

    protected const ARGUMENTS = [
        [
            'ip',
            InputArgument::REQUIRED,
            'IP string like x.x.x.x',
        ],
    ];

    protected function perform(InputInterface $input, OutputInterface $output, Geo $geo): void
    {
        $city = $geo->getCityFull($input->getArgument('ip'));

        if (is_array($city)) {
            foreach ($city as $key => $value) {
                if (is_array($value)) {
                    $output->writeln("<info>$key</info>:");
                    foreach ($value as $k => $v) {
                        $output->writeln("  $k: $v");
                    }
                    continue;
                }
                $output->writeln("<info>$key</info>: $value");
            }
            return;
        }

        $output->writeln(
            $city
                ? "City founded: <info>$city</info>"
                : "<error>City not found</error>"
        );
    }
}
