<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Allat;

class AllatPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    

    public function create(User $user)
    {
        return $user->isMenhely() && $user->isAuthenticated();
    }
    
    public function update(User $user, Allat $allat)
    {
        return in_array($user->id, [$allat->user_id, $allat->menhely_id]) && $user->isAuthenticated();
    }
    
    public function delete(User $user, Allat $allat)
    {
        return in_array($user->id, [$allat->user_id, $allat->menhely_id]) && $user->isAuthenticated();
    }
    
}


