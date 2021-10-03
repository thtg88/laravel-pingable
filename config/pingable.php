<?php

use Thtg88\Pingable\Http\Controllers\PingController;

return [
    'controller' => PingController::class,

    'response' => [
        'success' => true,
    ],

    'route' => [
        'method' => 'get',
        'path' => 'api/ping',
        'name' => 'pingable.api.ping',
    ],
];
