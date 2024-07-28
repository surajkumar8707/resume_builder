<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeDirectivesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::directive('isActiveRoute', function ($expression) {
            return "<?php echo isActiveRoute({$expression}); ?>";
        });

        Blade::directive('public_asset', function ($expression) {
            return "<?php echo public_asset({$expression}); ?>";
        });

        Blade::directive('printArray', function ($expression) {
            return "<?php echo printArray({$expression}); ?>";
        });
    }
}
