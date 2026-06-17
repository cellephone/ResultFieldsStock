<?php

namespace ResultFieldsStock\Providers;

use Plenty\Plugin\ServiceProvider;
use IO\Services\ItemSearch\Helper\ResultFieldTemplate;

class ResultFieldsStockServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        pluginApp(ResultFieldTemplate::class)
            ->addResultField('ResultFieldsStock::ResultFields/SingleItem');
    }
}
