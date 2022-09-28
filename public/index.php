<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Handler\Contact;
use App\Router;

$router = new Router();

$router->get('/', function () {
    echo 'HomePage';
});

$router->get('/about', function () {
    echo 'About Page';
});

$router->get('/contact', Contact::class . '::execute');

$router->post('/contact', Contact::class . '::store');

$router->addNotFoundHandler(function () {
    require_once __DIR__ . '/../templates/404.phtml';
});

$router->run();
