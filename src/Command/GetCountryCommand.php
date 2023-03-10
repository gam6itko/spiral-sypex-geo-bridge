<?php

declare(strict_types=1);

namespace Gam6itko\Spiral\SypexGeo\Command;

use Spiral\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Sypex\Geo;

class GetCountryCommand extends Command
{
    public const NAME = 'sypex:geo:get-country';

    protected const ARGUMENTS = [
        [
            'ip',
            InputArgument::REQUIRED,
            'IP string',
        ],
    ];

    protected function perform(InputInterface $input, OutputInterface $output, Geo $geo): void
    {
        $country = $geo->getCountry($input->getArgument('ip'));

        $output->writeln(
            $country
                ? "Country founded: <info>$country</info>"
                : "<error>Country not found</error>"
        );
    }
}
