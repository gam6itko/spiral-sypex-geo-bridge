<?php

declare(strict_types=1);

namespace Gam6itko\Spiral\SypexGeo\Bootloader;

use Gam6itko\Spiral\SypexGeo\Config\SypexGeoConfig;
use Spiral\Boot\Bootloader\Bootloader;
use Sypex\Geo;

final class SypexGeoBootloader extends Bootloader
{
    protected const SINGLETONS = [
        Geo::class => [self::class, 'initGeo'],
    ];

    public function initGeo(SypexGeoConfig $config): Geo
    {
        return new Geo($config->getFilepath(), $config->getMode());
    }
}
