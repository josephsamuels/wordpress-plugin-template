<?php


namespace WordpressPluginTemplate\Rest;

use WpNative;

class SampleRestService
{
  private function __construct()
  {
  }

  public function initialize()
  {
    WpNative\wp_register_rest_route('sample-rest-service/api', '/', [
      'methods'             => 'GET',
      'callback'            => function () {
        return WpNative\wp_get_rest_response('Ok');
      },
      'permission_callback' => function () {
        return true;
      }
    ]);
  }

  public static function getInstance(): SampleRestService
  {
    return new SampleRestService();
  }
}
