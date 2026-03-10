<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new class($_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)) extends Illuminate\Foundation\Application {
    /**
     * Get the path to the bootstrap directory.
     *
     * @param  string  $path
     * @return string
     */
    public function bootstrapPath($path = '')
    {
        // On Vercel, redirect cache files to /tmp
        if (isset($_ENV['APP_STORAGE_PATH']) && str_starts_with($_ENV['APP_STORAGE_PATH'], '/tmp')) {
            $base = $_ENV['APP_STORAGE_PATH'] . '/bootstrap';
            return $base . ($path ? DIRECTORY_SEPARATOR . $path : $path);
        }

        return parent::bootstrapPath($path);
    }
};

// On Vercel, only /tmp is writable. Redirect storage and cache there.
if (isset($_ENV['APP_STORAGE_PATH'])) {
    $app->useStoragePath($_ENV['APP_STORAGE_PATH']);
    
    // Also redirect bootstrap cache
    $cachePath = $_ENV['APP_STORAGE_PATH'] . '/bootstrap/cache';
    if (!is_dir($cachePath)) {
        mkdir($cachePath, 0755, true);
    }

    $_ENV['LARAVEL_SERVICES_CACHE'] = $cachePath . '/services.php';
    $_ENV['LARAVEL_PACKAGES_CACHE'] = $cachePath . '/packages.php';
    $_ENV['LARAVEL_CONFIG_CACHE'] = $cachePath . '/config.php';
    $_ENV['LARAVEL_ROUTES_CACHE'] = $cachePath . '/routes-v7.php';
    $_ENV['LARAVEL_EVENTS_CACHE'] = $cachePath . '/events.php';

    putenv("LARAVEL_SERVICES_CACHE={$_ENV['LARAVEL_SERVICES_CACHE']}");
    putenv("LARAVEL_PACKAGES_CACHE={$_ENV['LARAVEL_PACKAGES_CACHE']}");
    putenv("LARAVEL_CONFIG_CACHE={$_ENV['LARAVEL_CONFIG_CACHE']}");
    putenv("LARAVEL_ROUTES_CACHE={$_ENV['LARAVEL_ROUTES_CACHE']}");
    putenv("LARAVEL_EVENTS_CACHE={$_ENV['LARAVEL_EVENTS_CACHE']}");
}

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
