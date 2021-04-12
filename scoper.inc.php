<?php

declare(strict_types=1);

use Isolated\Symfony\Component\Finder\Finder;

return [
  'prefix'                     => 'WPPT',
  'finders'                    => [
    Finder::create()
      ->files()
      ->in(['inc']),
    Finder::create()
      ->files()
      ->ignoreVCS(true)
      ->notName('/LICENSE|.*\\.md|.*\\.dist|Makefile|composer\\.json|composer\\.lock/')
      ->exclude([
        'doc',
        'test',
        'test_old',
        'tests',
        'Tests',
        'vendor-bin',
      ])
      ->in('vendor'),
    Finder::create()->append([
      'index.php',
      'composer.json',
      'composer.lock',
    ]),
  ],
  'files-whitelist'            => [
    'inc/helpers/WpNative.php',
    './index.php'
  ],
  'whitelist'                  => [
    'WordpressPluginTemplate\*',
    'WpNative\*'
  ],
  'whitelist-global-constants' => true,
  'whitelist-global-classes'   => true,
  'whitelist-global-functions' => true,
];
