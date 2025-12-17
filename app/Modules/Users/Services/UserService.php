<?php

namespace App\Modules\Users\Services;

use App\Modules\Users\Repositories\UserRepositoryInterface;

class UserService
{
    public function __construct(
        private readonly UserRepositoryInterface $users
    ) {}

    public function listUsers(int $perPage = 15)
    {
        return $this->users->paginate($perPage);
    }

    public function createUser(array $data)
    {
        return $this->users->create($data);
    }
}
