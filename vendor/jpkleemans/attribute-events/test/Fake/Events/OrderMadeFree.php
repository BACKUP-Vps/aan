<?php

namespace Kleemans\Test\Fake\Events;

use Kleemans\Test\Fake\Order;

class OrderMadeFree
{
    public function __construct(Order $order)
    {
    }
}
