<?php

/**
 * A safe space for Wordpress native functions.
 */

namespace WpNative;

use WP_REST_Response;

/**
 * Returns a WP_Rest_Response object.
 *
 * @param null  $data
 * @param int   $status
 * @param array $headers
 *
 * @return WP_REST_Response
 */
function wp_get_rest_response($data = null, $status = 200, $headers = []): WP_REST_Response
{
  return new WP_REST_Response($data, $status, $headers);
}
