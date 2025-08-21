<?php

declare(strict_types=1);

namespace Gam6itko\Spiral\SypexGeo\Config;

use Spiral\Core\InjectableConfig;
use Sypex\Mode;

final class SypexGeoConfig extends InjectableConfig
{
    public const CONFIG = 'sypexGeo';

    protected array $config = [
        'filepath' => 'SxGeo.dat',
        'mode' => Mode::MEMORY,
        'urlCity' => 'https://sypexgeo.net/files/SxGeoCountry.zip',
        'urlCountry' => 'https://sypexgeo.net/files/SxGeoCity_utf8.zip',
        'urlInfo' => 'https://sypexgeo.net/files/SxGeo_Info.zip',
    ];

    public function getFilepath(): string
    {
        return $this->config['filepath'];
    }

    public function getMode(): int
    {
        return $this->config['mode'];
    }

    public function getUrlCity(): string
    {
        return $this->config['urlCity'];
    }

    public function getUrlCountry(): string
    {
        return $this->config['urlCountry'];
    }

    public function getUrlInfo(): string
    {
        return $this->config['urlInfo'];
    }
}
