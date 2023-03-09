<?php

$rules = [
    '@PSR12' => true,
];

$finder = PhpCsFixer\Finder::create()
    ->in([
        'src',
    ]);

$config = new PhpCsFixer\Config();
return $config
    ->setRules($rules)
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setUsingCache(true);
