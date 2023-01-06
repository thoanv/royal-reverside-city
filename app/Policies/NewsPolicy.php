<?php

namespace App\Policies;

use App\Models\News;
use App\Models\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class NewsPolicy
{
    use HandlesAuthorization;
    public function before($employee, $ability)
    {
        if ($employee->isSuperAdmin()) {
            return true;
        }
    }
    /**
     * Determine whether the Employee can view any models.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Employee $employee)
    {
        return $employee->hasPermission('news-views');
    }

    /**
     * Determine whether the Employee can view the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\News  $news
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Employee $employee, News $news)
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
        return $employee->hasPermission('news-add');
    }

    /**
     * Determine whether the Employee can update the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\News  $news
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Employee $employee, News $news)
    {
        return $employee->hasPermission('news-update');
    }

    /**
     * Determine whether the Employee can delete the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\News  $news
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Employee $employee, News $news)
    {
        return $employee->hasPermission('news-delete');
    }

    /**
     * Determine whether the Employee can restore the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\News  $news
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Employee $employee, News $news)
    {
        //
    }

    /**
     * Determine whether the Employee can permanently delete the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\News  $news
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Employee $employee, News $news)
    {
        //
    }
}
