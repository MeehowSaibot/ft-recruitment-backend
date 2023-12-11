<?php

namespace App\Http\Requests;

use App\Rules\PasswordMatch;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $email
 * @property string $password
 */
class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        $testEmail = $this->email;
        $testPassword = $this->password;
        return [
            'email' => 'required|email|exists:users,email',
            'password' => ['required', new PasswordMatch($this->email, $this->password)]
        ];
    }
}
