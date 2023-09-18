<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Blade::directive('money', function($value) {
           return "<?php echo 'R$ '. number_format($value, 2, ',', '.'); ?>"; 
        });
    }
}
