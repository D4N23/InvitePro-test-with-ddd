<?php
namespace App\Web\User\Requests;

use Domain\User\Enum\UserStatus;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
        public function rules(): array
        {
            return [
                'name' => ['required', 'string'],
                'email' => ['required', 'string'],
                'password' => ['required', 'string'],
            ];
        }
}