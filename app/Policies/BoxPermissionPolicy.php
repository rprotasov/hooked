<?php

namespace App\Policies;

use App\User;
use App\BoxPermission;
use Illuminate\Auth\Access\HandlesAuthorization;

class BoxPermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given task.
     *
     * @param  User  $user
     * @param  BoxPermission $permission
     * @return bool
     */
    public function destroy(User $user, BoxPermission $permission)
    {
        return $user->id === $permission->user_id;
    }

    /**
     * Determine if the given user can share a
     *     given box.
     *
     * @param  User  $user
     * @param  BoxPermission $permission
     * @return bool
     */
    public function shareable(User $user, BoxPermission $permission)
    {
        return $user->id === $permission->user_id;
    }
}