<?php

declare(strict_types=1);

use Isolated\Symfony\Component\Finder\Finder;

return [
  'prefix'                     => 'PSPT',
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
    './index.php'
  ],
  'whitelist'                  => [
    'WordpressPluginTemplate\*',
    '\*'
  ],
  'whitelist-global-constants' => true,
  'whitelist-global-classes'   => true,
  'whitelist-global-functions' => true,
];
