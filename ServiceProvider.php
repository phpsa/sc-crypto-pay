<?php

namespace Phpsa\ScFreeShipping;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{

    public function boot()
    {
        parent::boot();

        $this->publishes(
            [
             __DIR__.'/../config/sc-free-shipping.php' => config_path('sc-free-shipping.php'),
             ], 'config'
        );


    }
}
