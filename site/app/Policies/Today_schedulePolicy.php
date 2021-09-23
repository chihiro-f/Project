<?php

namespace App\Policies;

use App\Today_schedule;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Today_schedulePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any today_schedules.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the today_schedule.
     *
     * @param  \App\User  $user
     * @param  \App\Today_schedule  $todaySchedule
     * @return mixed
     */
    public function view(User $user, Today_schedule $todaySchedule)
    {
        //
    }

    /**
     * Determine whether the user can create today_schedules.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the today_schedule.
     *
     * @param  \App\User  $user
     * @param  \App\Today_schedule  $todaySchedule
     * @return mixed
     */
    public function update(User $user, Today_schedule $today_schedule)
    {
        return $user->id == $today_schedule->user_id;
    }

    /**
     * Determine whether the user can delete the today_schedule.
     *
     * @param  \App\User  $user
     * @param  \App\Today_schedule  $todaySchedule
     * @return mixed
     */
    public function delete(User $user, Today_schedule $today_schedule)
    {
        return $user->id == $today_schedule->user_id;
    }

    /**
     * Determine whether the user can restore the today_schedule.
     *
     * @param  \App\User  $user
     * @param  \App\Today_schedule  $todaySchedule
     * @return mixed
     */
    public function restore(User $user, Today_schedule $today_schedule)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the today_schedule.
     *
     * @param  \App\User  $user
     * @param  \App\Today_schedule  $todaySchedule
     * @return mixed
     */
    public function forceDelete(User $user, Today_schedule $today_schedule)
    {
        //
    }
}
