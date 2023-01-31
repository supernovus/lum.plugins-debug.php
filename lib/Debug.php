<?php

namespace Lum\Plugins;

/**
 * A `Lum\Core` plugin extension of `\Lum\Debug`
 *
 * Replaces the original `\Lum\Plugins\Debug` that used
 * to be a part of the Core library prior to version 3.0.
 */
class Debug extends \Lum\Debug
{
  public static function get($flag, $default=null)
  {
    $core = \Lum\Core::getInstance();
    return $core["debug.$flag"] ?? $default;
  }

  public static function set($flag, $value)
  {
    $core = \Lum\Core::getInstance();
    $core["debug.$flag"] = $value;
  }
}
