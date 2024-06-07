<?php

namespace App\Policies;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TodoPolicy
{
    public function edit(User $user, Todo $todo): bool
    {
        return $todo->user()->is($user);
    }
}
