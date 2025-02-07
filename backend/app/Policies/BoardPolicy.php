<?php

namespace App\Policies;

use App\Models\Board;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BoardPolicy
{
    public function modify(User $user, Board $board): Response
    {
        return $user->id === $board->project->user_id
            ? Response::allow()
            : Response::deny('You do not own this board.');
    }
}
