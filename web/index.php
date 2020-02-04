<?php
/**
 * Craft web bootstrap file
 */

// Set path constants
define('CRAFT_BASE_PATH', dirname(__DIR__));
define('CRAFT_VENDOR_PATH', CRAFT_BASE_PATH.'/vendor');

switch ($_SERVER['SERVER_NAME']) {
    case "quintexservices.local":
        define('CRAFT_ENVIRONMENT', 'LOCAL');
        break;
    case "quintex.mf1.ca":
        define('CRAFT_ENVIRONMENT', 'STAGING');
        break;
    default:   // Covers "www" and non-"www"
        define('CRAFT_ENVIRONMENT', 'PRODUCTION');
        break;
}

// Load Composer's autoloader
require_once CRAFT_VENDOR_PATH.'/autoload.php';

// Load dotenv?
if (class_exists('Dotenv\Dotenv') && file_exists(CRAFT_BASE_PATH.'/.env')) {
    Dotenv\Dotenv::create(CRAFT_BASE_PATH)->load();
}

// Load and run Craft
define('CRAFT_ENVIRONMENT', getenv('ENVIRONMENT') ?: 'production');
$app = require CRAFT_VENDOR_PATH.'/craftcms/cms/bootstrap/web.php';
$app->run();
