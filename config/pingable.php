<?php

use Thtg88\Pingable\Http\Controllers\PingController;

return [
    'controller' => PingController::class,

    'response' => [
        'success' => true,
    ],

    'route' => [
        'method' => 'get',
        'name' => 'pingable.ping',
        'path' => 'api/ping',
    ],
];
