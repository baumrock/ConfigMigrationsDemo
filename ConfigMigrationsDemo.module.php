<?php

namespace ProcessWire;

/**
 * @author Bernhard Baumrock, 04.01.2025
 * @license Licensed under MIT
 * @link https://www.baumrock.com
 */
require_once __DIR__ . '/RockMigrationsConstants.php';
class ConfigMigrationsDemo extends WireData implements Module
{
  use \ConfigMigrationsDemo\RockMigrationsConstants;

  public static function getModuleInfo()
  {
    return [
      'title' => 'ConfigMigrationsDemo',
      'version' => '0.0.1',
      'summary' => 'RockMigrations Config Migrations Demo Module',
      'autoload' => true,
      'singular' => true,
      'icon' => 'smile-o',
      'requires' => [],
      'installs' => [],
    ];
  }
}
