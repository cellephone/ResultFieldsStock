<?php

namespace ResultFieldsStock\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Webshop\ItemSearch\Helpers\ResultFieldTemplate;

class ResultFieldsStockServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        // Holt die ResultFieldTemplate-Klasse, genau wie Ceres es tut
        $templateContainer = pluginApp(ResultFieldTemplate::class);

        // Fügt deine JSON-Datei zum SingleItem-Template HINZU
        $templateContainer->setTemplates([
            ResultFieldTemplate::TEMPLATE_SINGLE_ITEM => 'ResultFieldsStock::ResultFields.SingleItem'
        ]);
    }
}
