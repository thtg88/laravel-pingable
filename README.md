# Pingable

Pingable provides a ping route for your Laravel application.

## Installation

```bash
composer require thtg88/laravel-pingable
```

## Publish Configuration

If you want to change any of the default configuration variables, you can publish the config file with the following command:

```bash
php artisan vendor:publish --tag=pingable-config
```

### Available configuration options

| Config Option | Type | Description | Default |
|---------------|------|-------------|---------|
| `pingable.response` | `mixed` | the response to be output by the controller. Please note this is output as JSON, so it must be something that is accepted by the Laravel Framework's `response()->json(...)` method | `['success' => true]` |
| `pingable.route.method` | `string` | the lowercased HTTP method the Pingable route responds to. This is anything supported by the Laravel Framework (`get`, `post`, etc.) | `get` |
| `pingable.route.name` | `string` | the name of the route, so that you can use it across the app, e.g. `route(config('pingable.route.name'))` | `pingable.api.ping` |
| `pingable.route.path` | `string` | the URI where the ping request will be reachable | `pingable/api/ping` |
| `pingable.controller` | `string` | the fully-qualified classname of the controller that responds to the `pingable.ping` route. ⚠️ **Once you override this, you are on your own!** ⚠️ | `Thtg88\Pingable\Http\Controllers\PingController` |

## License

MIT
