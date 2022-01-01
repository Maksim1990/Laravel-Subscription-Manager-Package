<?php

use MaksimN\SubscriptionManager\Services\SubscriptionManager;
use PhpSpec\ObjectBehavior;

class SubscriptionManagerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SubscriptionManager::class);
    }
}
