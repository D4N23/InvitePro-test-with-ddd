<?php 

namespace Domain\User\Models;
use Domain\User\Enum\UserStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    use HasFactory;
    protected $table = 'users';
   
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
    ];

    public function getStatusAttribute($value)
    {
        return UserStatus::status($value);
    }
}