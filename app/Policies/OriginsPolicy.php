<?php

namespace App\Policies;

use App\Models\Origins;
use App\Models\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class OriginsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the Employee can view any models.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Employee $employee)
    {
        //
    }

    /**
     * Determine whether the Employee can view the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\Origins  $origins
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Employee $employee, Origins $origins)
    {
        //
    }

    /**
     * Determine whether the Employee can create models.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Employee $employee)
    {
        //
    }

    /**
     * Determine whether the Employee can update the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\Origins  $origins
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Employee $employee, Origins $origins)
    {
        //
    }

    /**
     * Determine whether the Employee can delete the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\Origins  $origins
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Employee $employee, Origins $origins)
    {
        //
    }

    /**
     * Determine whether the Employee can restore the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\Origins  $origins
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Employee $employee, Origins $origins)
    {
        //
    }

    /**
     * Determine whether the Employee can permanently delete the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\Origins  $origins
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Employee $employee, Origins $origins)
    {
        //
    }
}
