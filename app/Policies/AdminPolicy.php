<?php

namespace App\Policies;

use App\Models\User;

class AdminPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function viewAdminSection(User $user)
    {
        return $user->isAdmin; // Permite si el usuario es administrador
    }
}
