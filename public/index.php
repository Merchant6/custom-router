<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;
use App\Handler\Contact;

$route = new Router();

$route->get('/', function () {
    echo 'Hello Page';
});

$route->get('/about', function (array $params = []) {
    echo 'About Page';
    if(!empty($params))
    {
        echo '<h2>'. $params['username'] .'</h2>';
    }
});

$route->get('/contact', Contact::class . '::execute');

$route->post('/contact', function($params){
    var_dump($params);
});

$route->addNotFoundHandler(function()
{
    $title = 'Page Not Found';
    require_once __DIR__ . '/../templates/404.php';
});

$route->run();
