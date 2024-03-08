<?php 
namespace App\Web\User\Controllers;

use Domain\User\Actions\CreateUserAction;
use App\Web\User\Requests\UserRequest;
use Domain\User\DTO\UserDTO;
use Domain\User\Models\User;

class UserController
{

   public function index()
  {
        $users = app(User::class)->all();

        return view('welcome', compact('users'));
  }

  public function store(UserRequest $userRequest, CreateUserAction $createUserAction)
  {
       
    $data = UserDTO::fromRequest($userRequest);

    $createUserAction($data);

    return back()->with(['success' => 'User registred with success']);
        
  }

}