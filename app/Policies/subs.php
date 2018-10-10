<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class subs
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function subs($user){
        if ($user->Subs == 1){
            return true;
        } else {
            return false;
        }
    }
}
