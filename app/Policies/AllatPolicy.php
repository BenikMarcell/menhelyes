<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Allat;
use App\Models\Menhely;

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
    /*
    public function update(User $user, Allat $allat)
    {
        return 
    }// ez nem jó
    
    public function delete(User $user, Allat $allat)
    {
        
    }

    public function index(User $user, Allat $allat, Menhely $menhely)
    {
    if ($user->isMenhely()) { // itt megtudjuk, hogy a felhasználó menhely-e
        $menhely = Menhely::where('email', $user->email)->first(); // beazonosítom email alapján a menhelyet

        if ($menhely && $menhely->m_id === $allat->m_id) {
            return $allat->m_id;
        }
    }
    return null;
    }*/
    
}


