<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class MemberPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    function checkmember(User $user)
    {
        return ($user->sebagai == 'member' ? Response::allow() : Response::deny("Anda Harus Daftar Sebagai Member Dulu."));
    }
}
