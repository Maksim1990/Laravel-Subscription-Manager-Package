<?php

namespace MaksimN\SubscriptionManager\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class SubscriptionManagerServiceException extends Exception
{
    public function __construct($message = null, $code = Response::HTTP_INTERNAL_SERVER_ERROR)
    {
        parent::__construct($message, $code);
    }
}
