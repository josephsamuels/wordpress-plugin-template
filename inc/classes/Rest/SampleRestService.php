<?php

namespace WordpressPluginTemplate\Rest;

class SampleRestService
{
  private function __construct()
  {
  }

  public function initialize()
  {
    register_rest_route(WPPT_SLUG . '/v1', '/test', [
      'methods'             => 'GET',
      'callback'            => function () {
        return new \WP_REST_Response('REST Works!');
      },
      'permission_callback' => function () {
        return true;
      }
    ]);
  }

  public static function get_instance(): SampleRestService
  {
    return new SampleRestService();
  }
}
