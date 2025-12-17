<?php

namespace App\Modules\Billing\Repositories;

use App\Modules\Billing\Models\Invoice;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class InvoiceRepository implements InvoiceRepositoryInterface
{
    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return Invoice::query()->paginate($perPage);
    }

    public function find(int $id): ?Invoice
    {
        return Invoice::find($id);
    }

    public function create(array $data): Invoice
    {
        return Invoice::create($data);
    }
}
