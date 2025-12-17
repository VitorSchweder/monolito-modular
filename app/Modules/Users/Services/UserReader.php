<?php

namespace App\Modules\Users\Services;

use App\Modules\Users\Models\User;
use App\Modules\Users\Repositories\UserRepositoryInterface;
use App\Modules\Users\Services\Contracts\UserReaderInterface;

class UserReader implements UserReaderInterface
{
    public function __construct(
        private readonly UserRepositoryInterface $users
    ) {}

    public function getById(int $id): ?User
    {
        return $this->users->find($id);
    }
}
