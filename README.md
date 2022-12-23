# sypex-geo-spiral-bridge

sypex-geo bridge for Spiral framework.
Provides DI \Sypex\Geo singleton

```shell
composer require gam6itko/spiral-sypex-geo-bridge
```

## Config

```php
# config/sypexGeo.php

return [
    'filepath' => directory('root').'SxGeo.dat',
    'mode' => \Sypex\Mode::MEMORY
];
```
