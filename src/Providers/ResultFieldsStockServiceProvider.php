<?php
namespace ResultFieldsStock\Providers;
use Plenty\Plugin\ServiceProvider;

class ResultFieldsStockServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Registriere die ResultFields aus diesem Plugin
        $this->getApplication()->register('Plenty.resultFields.stock', function($app) {
            return [
                'SingleItem' => __DIR__ . '/../resources/views/ResultFields/SingleItem.fields.json'
            ];
        });
    }
}
