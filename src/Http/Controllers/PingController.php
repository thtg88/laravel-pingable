<?php

namespace Thtg88\Pingable\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class PingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): JsonResponse
    {
        /** @var array */
        $response = Config::get('pingable.response');

        return response()->json($response);
    }
}
