<?php

declare(strict_types=1);

namespace Vancado\VncExample2\EventListener;

use Vancado\VncExample1\Event\ProductHasBeenBoughtEvent;

class MailProductBoughtListener
{
    public function __invoke(ProductHasBeenBoughtEvent $event): void
    {
        $message = "
Product {$event->getProductName()} has been bought 
Count: {$event->getProductCount()}

Stock count: {$event->getStockCount()}
        ";

        mail('info@shop.de', 'Product has been bought', $message);
    }
}