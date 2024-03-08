<?php 
namespace Domain\User\Enum;

use MyCLabs\Enum\Enum;

class UserStatus extends Enum
{
    public const ACTIVE = 'active';

    public const INACTIVE = 'inactive';

    public static function status($value): string
    {
        switch($value){
            case self::ACTIVE:
                return 'active';
            case self::INACTIVE:
                return 'inactive';
            default:
               return 'none';
        }
    }

}