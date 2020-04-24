<?php

namespace Shoreline\Policies;

use Shoreline\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \Shoreline\User  $user
     * @param  \Shoreline\User  $model
     * @return mixed
     */
    public function view(User $user, User $model)
    {
        // return Auth::user()->id === $user->id || $user->id === $model->id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Shoreline\User  $user
     * @param  \Shoreline\User  $model
     * @return mixed
     */
    public function update(User $user, User $model)
    {
        // return Auth::user()->id === $user->id && $user->id === $model->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Shoreline\User  $user
     * @param  \Shoreline\User  $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        return Auth::user()->id === $user->id && $user->id === $model->id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \Shoreline\User  $user
     * @param  \Shoreline\User  $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Shoreline\User  $user
     * @param  \Shoreline\User  $model
     * @return mixed
     */
    public function forceDelete(User $user, User $model)
    {
        //
    }
}
