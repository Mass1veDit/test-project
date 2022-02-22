<?php

namespace App\Modules\Admin\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthUser;
use Laravel\Passport\HasApiTokens;
use App\Modules\Admin\Role\Models\Traits\UserRoles;
use App\Modules\Admin\Role\Models\Role;
use Illuminate\Support\Facades\Hash;

class User extends AuthUser
{
    use HasFactory , HasApiTokens,  UserRoles;

    protected $fillable=[
        'firstname',
        'lastname',
        'patronymic',
        'avatar',
        'email',
        'phone',
        'sex',
        'status',
        'password',
    ];

    protected $hidden=[
        'password'
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }



}
