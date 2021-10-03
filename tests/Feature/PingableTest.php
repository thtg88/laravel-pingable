<?php

namespace Thtg88\Pingable\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Illuminate\Testing\TestResponse;
use Orchestra\Testbench\TestCase;
use Thtg88\Pingable\PingableServiceProvider;

class PingableTest extends TestCase
{
    /** @covers \Thtg88\Pingable\Http\Controllers\PingableController::__invoke */
    public function test_successful_ping(): void
    {
        $response = $this->ping();

        $response->assertOk();
    }

    /** @covers \Thtg88\Pingable\Http\Controllers\PingableController::__invoke */
    public function test_successful_ping_responds_with_config_response(): void
    {
        $response = $this->ping();

        $response->assertJson(Config::get('pingable.response'));
    }

    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [PingableServiceProvider::class];
    }

    private function ping(): TestResponse
    {
        $method = Config::get('pingable.route.method');
        $route_name = Config::get('pingable.route.name');

        return $this->$method(route($route_name));
    }
}
