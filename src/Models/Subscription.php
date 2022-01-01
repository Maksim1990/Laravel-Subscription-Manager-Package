<?php

namespace MaksimN\SubscriptionManager\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'sm_subscriptions';
    protected $fillable = ['email', 'user_id', 'description'];

    private string $email;
    private int $user_id;
    private ?string $description = null;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'email' => $this->getEmail(),
            'user_id' => $this->getUserId(),
            'description' => $this->getDescription(),
        ];
    }
}
