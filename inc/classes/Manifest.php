<?php

namespace WordpressPluginTemplate;

class Manifest
{
  private function __construct()
  {
  }

  public function get_manifest(): array {
    return json_decode(file_get_contents(WPPT_PLUGIN_PATH . '/public/assets/manifest.json'), true);
  }

  public static function get_instance(): Manifest {
    return new Manifest();
  }
}
