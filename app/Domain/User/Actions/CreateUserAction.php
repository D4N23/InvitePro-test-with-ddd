<?php
namespace Domain\User\Actions;

use Domain\User\DTO\UserDTO;
use Domain\User\Enum\UserStatus;
use Domain\User\Models\User;

final class CreateUserAction
{
    public function __invoke( UserDTO $userDTO): User
    {
        return User::create(
            [
            'id' => $userDTO->id, 
            'name' => $userDTO->name, 
            'email' => $userDTO->email, 
            'password' => $userDTO->password,
            'status' => UserStatus::ACTIVE,
            ]
        );
    }
}