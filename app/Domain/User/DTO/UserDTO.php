<?php

namespace Domain\User\DTO;
use App\Web\User\Requests\UserRequest;
use Spatie\DataTransferObject\DataTransferObject;

class UserDTO extends DataTransferObject{

    /** @var string */
    public $id;

    /** @var string */
    public $name;

    /** @var string */
    public $email;

    /** @var string */ 
    public $password;

    public static function fromRequest(UserRequest $userRequest): UserDTO
    {
        return new Self([
            'id'=> $userRequest['id'], 
            'name'=>$userRequest['name'], 
            'email' => $userRequest['email'], 
            'password'=>$userRequest['password']

        ]);
    }
}
