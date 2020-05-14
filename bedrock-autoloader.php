<?php

/**
 * The autoloader bootstrap file
 *
 * @link    https://github.com/roots/bedrock
 * @package Roots\Bedrock
 *
 * @wordpress-plugin
 * Plugin Name: Bedrock Autoloader
 * Plugin URI: https://github.com/roots/bedrock/
 * Description: An autoloader that enables standard plugins to be required just like must-use plugins. The autoloaded plugins are included during mu-plugin loading. An asterisk (*) next to the name of the plugin designates the plugins that have been autoloaded.
 * Version: 1.12.4
 * Author: Roots
 * Author URI: https://roots.io/
 * License: MIT License
 */

if ( ! is_blog_installed() ) {
    return;
}

new \Roots\Bedrock\Autoloader();
