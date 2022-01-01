<?php

use PhpSpec\ObjectBehavior;

class SubscriptionManagerSpec extends ObjectBehavior
{
    function let(Writer $writer)
    {
        $this->beConstructedWith($writer);
    }

    function it_can_subscribe_new_email()
    {
        $this->generate('local')->shouldBeString();
    }
}
