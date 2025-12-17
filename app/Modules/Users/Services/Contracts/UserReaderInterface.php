<?php

namespace App\Modules\Users\Services\Contracts;

use App\Modules\Users\Models\User;

interface UserReaderInterface
{
    public function getById(int $id): ?User;
}
