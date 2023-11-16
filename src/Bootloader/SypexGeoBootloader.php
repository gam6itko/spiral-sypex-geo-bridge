<?php

declare(strict_types=1);

namespace Gam6itko\Spiral\SypexGeo\Bootloader;

use Gam6itko\Spiral\SypexGeo\Config\SypexGeoConfig;
use Spiral\Boot\Bootloader\Bootloader;
use Sypex\Geo;
use Sypex\GeoAdapter;
use Sypex\GeoInterface;

final class SypexGeoBootloader extends Bootloader
{
    public function defineSingletons(): array
    {
        return [
            Geo::class => static fn(SypexGeoConfig $config) => new Geo($config->getFilepath(), $config->getMode()),
            GeoInterface::class => static fn(Geo $geo) => new GeoAdapter($geo),
        ];
    }
}
