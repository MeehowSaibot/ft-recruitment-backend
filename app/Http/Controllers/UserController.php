<?php

namespace App\Http\Controllers;

use App\Services\DuelService;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function __construct(
        private readonly UserService $userService,
    )
    {
    }

    /**
     * @param CreateUserRequest $request
     * @return JsonResponse
     */
    public function startDuel(CreateUserRequest $request): JsonResponse
    {
        return $this->userService->createUser($request);
    }
}
