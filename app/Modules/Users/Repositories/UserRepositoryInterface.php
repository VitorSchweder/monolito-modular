<?php

namespace App\Modules\Users\Repositories;

use App\Modules\Users\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface UserRepositoryInterface
{
    public function paginate(int $perPage = 15): LengthAwarePaginator;
    public function find(int $id): ?User;
    public function create(array $data): User;
}
