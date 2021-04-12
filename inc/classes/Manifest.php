<?php


namespace WordpressPluginTemplate;


class Manifest
{
  private function __construct()
  {
  }

  public function getManifest(): array {
    return json_decode(file_get_contents(WPPT_PLUGIN_PATH . '/public/assets/manifest.json'), true);
  }

  public static function getInstance(): Manifest {
    return new Manifest();
  }
}
