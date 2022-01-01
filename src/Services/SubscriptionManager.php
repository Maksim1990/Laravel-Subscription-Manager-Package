<?php

namespace MaksimN\SubscriptionManager\Services;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidatorInstance;
use MaksimN\SubscriptionManager\Exceptions\SubscriptionManagerServiceException;
use MaksimN\SubscriptionManager\Models\Subscription;

class SubscriptionManager
{
    public function subscribe(array $subscriptionData): void
    {
        try {
            Subscription::create(self::validateSubscriptionRequest($subscriptionData));
        } catch (\Throwable $e) {
            throw new SubscriptionManagerServiceException($e->getMessage());
        }
    }

    public function unsubscribe(array $subscriptionData): void
    {
        try {
            Subscription::where('email',self::validateEmail($subscriptionData))->delete();
        } catch (\Throwable $e) {
            throw new SubscriptionManagerServiceException($e->getMessage());
        }
    }

    public static function validateSubscriptionRequest(array $requestData): array
    {
        $validator = Validator::make($requestData, [
            'email' => 'required|email|unique:sm_subscriptions',
            'user_id' => 'required|numeric',
            'description' => 'string',
        ]);

        if ($validator->fails()) {
            throw new SubscriptionManagerServiceException(implode(',', $validator->messages()->all()));
        }

        return $requestData;
    }

    public static function validateEmail(array $requestData): string
    {
        $validator = Validator::make($requestData, [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            throw new SubscriptionManagerServiceException(implode(',', $validator->messages()->all()));
        }

        return $requestData['email'];
    }

    private function processValidationErrors(ValidatorInstance $validator): void
    {
        if ($validator->fails()) {
            throw new SubscriptionManagerServiceException(implode(',', $validator->messages()->all()));
        }
    }
}
