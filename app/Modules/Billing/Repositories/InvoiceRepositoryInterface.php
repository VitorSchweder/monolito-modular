<?php

namespace App\Modules\Billing\Repositories;

use App\Modules\Billing\Models\Invoice;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface InvoiceRepositoryInterface
{
    public function paginate(int $perPage = 15): LengthAwarePaginator;
    public function find(int $id): ?Invoice;
    public function create(array $data): Invoice;
}
