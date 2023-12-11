<?php

namespace App\Http\Requests;

use App\Rules\PasswordMatch;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $email
 * @property string $password
 */
class LogoutRequest extends FormRequest
{
    public function rules(): array
    {
        return [];
    }

}
