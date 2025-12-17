<?php

namespace App\Modules\Billing\Services;

use App\Modules\Users\Services\Contracts\UserReaderInterface;

class BillingService
{
    public function __construct(
        private readonly UserReaderInterface $userReader
    ) {}

    public function chargeUser(int $userId, float $amount): void
    {
        $user = $this->userReader->getById($userId);

        if (!$user) {
            throw new \RuntimeException('User not found');
        }
    }
}
