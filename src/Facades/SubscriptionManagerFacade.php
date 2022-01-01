<?php

namespace MaksimN\SubscriptionManager\Facades;

use Illuminate\Support\Facades\Facade;

class SubscriptionManagerFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'SubscriptionManager';
    }
}
