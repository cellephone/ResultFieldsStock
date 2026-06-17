<?php

namespace ResultFieldsStock\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Webshop\ItemSearch\Services\ItemSearchService;

class ResultFieldsStockServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot(ItemSearchService $itemSearchService)
    {
        // Fügt die Felder direkt in die Suche des Webshops ein
        $itemSearchService->getSearchFactory()
            ->withResultFields('ResultFieldsStock::ResultFields.SingleItem');
    }
}
