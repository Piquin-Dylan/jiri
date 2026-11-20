<?php

namespace App\Policies;

use App\Models\Jiri;
use App\Models\User;

class JiriPolicy
{



    public function create(User $user,Jiri $jiri)
    {
        return $user->id === $jiri->user_id;
    }

    public function update(User $user, Jiri $jiri)
    {
        return $user->id === $jiri->user_id;

    }

    public function delete(User $user, Jiri $jiri)
    {
        return $user->id === $jiri->user_id;

    }

}
