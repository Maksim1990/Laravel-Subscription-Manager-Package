<?php

namespace MaksimN\SubscriptionManager\tests\Unit;

use MaksimN\SubscriptionManager\Models\Subscription;
use PHPUnit\Framework\TestCase;

class SubscribeManagerTest extends TestCase
{
    /** @test */
    function can_subscribe_with_valid_data()
    {
        $subscription = Subscription::factory(1)->create(['email' => 'test@test.com']);
        $this->assertEquals('test@test.com', $subscription->email);
    }
}
