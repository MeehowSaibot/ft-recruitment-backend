<?php

namespace App\Services;

use App\Http\Requests\LoginRequest;
use App\Models\UserModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class LoginService extends BaseService
{
    /**
     * @throws Throwable
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $email = $request->get('email');
        $password = $request->get('password');

        try {
            if (Auth::attempt([$email, $password])) {

                $user = UserModel::query()->where('email', $email)->firstOrFail();

                return response()->json([
                    'info' => 'OK',
                    'token' => $user->createToken('login-token')->plainTextToken
                ]);

            }

        } catch (Throwable $e) {
                throw new $e;
            }

        return response()->json(['info' => __('Email or password is incorrect')], Response::HTTP_UNAUTHORIZED);
    }

    public function logout(LoginRequest $request)
    {
        auth('sanctum')->user()->tokens()->delete();

        return response()->json(['info' => 'OK']);
    }
}
