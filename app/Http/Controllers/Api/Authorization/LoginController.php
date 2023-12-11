<?php

namespace App\Http\Controllers\Api\Authorization;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Http\JsonResponse;
use Throwable;

class LoginController extends Controller
{
    public function __construct(
        private readonly LoginService $loginService,
    )
    {

    }

    /**
     * @throws Throwable
     */
    public function login(LoginRequest $request): JsonResponse
    {
        return $this->loginService->login($request);
    }

    /**
     * @throws Throwable
     */
    public function logout(LogoutRequest $request): JsonResponse
    {
        return $this->loginService->logout($request);
    }
}
