<?php

namespace ResultFieldsStock\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use IO\Helper\TemplateContainer;

class ResultFieldsStockServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot(Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen(
            'IO.ctx.item',
            function(TemplateContainer $templateContainer)
            {
                $templateContainer->setTemplate('ResultFieldsStock::ResultFields.SingleItem');
            },
            0
        );
    }
}
