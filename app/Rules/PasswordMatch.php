<?php

namespace App\Rules;

use App\Models\UserModel;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PasswordMatch implements ValidationRule
{
    public string $email;
    public string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @param string $attribute
     * @param mixed $value
     * @param Closure $fail
     * @return void
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $failMessage = 'The provided password does not match the email.';

        /** @var UserModel $user */
        $user = UserModel::query()->where('email', $this->email)->firstOrFail();

        if ($value !== $user->password){
            $fail($failMessage);
        }
    }
}
