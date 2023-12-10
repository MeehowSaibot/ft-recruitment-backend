<?php

namespace App\Services;

class BaseService
{
    protected function getUser(): ?UserModel
    {
        /** @var UserModel $user */
        $user = auth()->user();
        return $user;
    }
}
