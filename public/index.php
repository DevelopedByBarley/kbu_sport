<?php

use Core\Database;
use Core\Language;
use Core\Session;

ini_set('display_errors', 1);
error_reporting(E_ALL);

const BASE_PATH = __DIR__ . '/../';
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

Session::create();

require_once __DIR__ . '/../core/functions.php';
require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../vendor/fakerphp/faker/src/autoload.php';


require base_path('playground.php');

define('REGISTRATION_OPENED', 1);
define('TRANSFERS', [
    'Nem',
    'Igen, reggel a cég telephelyéről (Helsinki út 105.)',
    'Igen, délután a cég telephelyéről (Helsinki út 105.)',
    'Igen, reggel és délután a cég telephelye és a Sport 11 között',
    'Igen, reggel a Kelenföldi pályaudvarról',
    'Igen, délután a Kelenföldi pályaudvarra',
    'Igen, reggel és délután a Kelenföldi pályaudvar és a Sport11 között',
]);


$db = Database::getInstance();
(new Language)->set();

$router = new \Core\Router();
$routes = require base_path('routes/routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
