<?php

declare(strict_types=1);

namespace Vancado\VncExample2\EventListener;

use Vancado\VncExample1\Event\ProductHasBeenBoughtEvent;

class MailAfterFetchedProductFromStockListener
{
    public function __invoke(ProductHasBeenBoughtEvent $event): void
    {
        $message = "
Product {$event->getProductName()} has been bought 
Count: {$event->getProductCount()}

Stock count after fetching products from it: {$event->getStockCount()}
        ";

        mail('info@shop.de', 'Prodct has been fetched from stock', $message);
    }
}