<?php

namespace Lum\Plugins;

/**
 * A `Lum\Core` plugin extension of `\Lum\Debug`
 */
class Debug extends \Lum\Debug
{
  protected static function get($flag, $default=null)
  {
    $core = \Lum\Core::getInstance();
    return $core["debug.$flag"] ?? $default;
  }

  protected static function set($flag, $value)
  {
    $core = \Lum\Core::getInstance();
    $core["debug.$flag"] = $value;
  }
}
