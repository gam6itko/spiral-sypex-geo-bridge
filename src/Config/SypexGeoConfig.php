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
    ];

    public function getFilepath(): string
    {
        return $this->config['filepath'];
    }

    public function getMode(): int
    {
        return $this->config['mode'];
    }
}
