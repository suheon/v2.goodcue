<?php

if (!function_exists('route_path')) {
  /**
   * Generate the URL to a named route.
   *
   * @param  array|string  $name
   * @param  mixed  $parameters
   * @param  bool  $absolute
   * @return string
   */
  function rpath($name, $parameters = [])
  {
    return app('url')->route($name, $parameters, false);
  }
}
