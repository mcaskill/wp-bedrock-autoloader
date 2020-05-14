# Bedrock Autoloader for WordPress

Standalone version of the [Bedrock Autoloader](https://github.com/roots/bedrock/blob/1.12.7/web/app/mu-plugins/bedrock-autoloader.php) for must-use plugins.

## Installation

Require this package, with [Composer](https://getcomposer.org), in the root directory of your project.

```
$ composer require mcaskill/bedrock-autoloader
```

## Usage

Add [`bedrock-autoloader.php`](bedrock-autoloader.php) to your must-use plugins directory.

Example:

```
<?php

if ( ! is_blog_installed() ) {
    return;
}

new \Roots\Bedrock\Autoloader(__DIR__);
```

## Credits

All credits & copyrights belongs to people behind [Bedrock](https://github.com/roots/bedrock).
