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

        $output->writeln(
            $city
                ? "City founded: <info>$city</info>"
                : "<error>City not found</error>"
        );
    }
}
