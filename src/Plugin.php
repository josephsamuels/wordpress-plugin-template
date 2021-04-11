<?php

namespace WordpressPluginTemplate;

use WpNative;

class Plugin
{
  private function __construct()
  {
  }

  public function initialize()
  {

  }

  public function activate()
  {

  }

  public function deactivate()
  {

  }

  public static function uninstall()
  {

  }

  public static function getInstance(): Plugin
  {
    return new Plugin();
  }
}
