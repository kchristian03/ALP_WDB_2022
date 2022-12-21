<?php

namespace App\Policies;

use App\Models\Category_Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class CategoryProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return Auth::user()->status == 'admin';
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Category_Product  $categoryProduct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Category_Product $categoryProduct)
    {
        return Auth::user()->status == 'admin';
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return Auth::user()->status == 'admin';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Category_Product  $categoryProduct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Category_Product $categoryProduct)
    {
        return Auth::user()->status == 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Category_Product  $categoryProduct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Category_Product $categoryProduct)
    {
        return Auth::user()->status == 'admin';
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Category_Product  $categoryProduct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Category_Product $categoryProduct)
    {
        return Auth::user()->status == 'admin';
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Category_Product  $categoryProduct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Category_Product $categoryProduct)
    {
        return Auth::user()->status == 'admin';
    }
}
