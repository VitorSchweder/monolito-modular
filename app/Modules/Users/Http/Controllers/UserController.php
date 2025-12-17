<?php

namespace App\Modules\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Users\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function __construct(
        private readonly UserService $service
    ) {}

    public function index(): JsonResponse
    {
        return response()->json($this->service->listUsers());
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name'     => ['required', 'string'],
            'email'    => ['required', 'email', 'unique:users.users,email'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = $this->service->createUser($data);

        return response()->json($user, 201);
    }
}
