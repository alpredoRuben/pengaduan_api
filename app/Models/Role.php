<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;
use App\User;

class Role extends Model
{
    protected $fillable = [
        'name', 'slug'
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_roles');
    }

    public function typeComplaints()
    {
        return $this->hasMany(\App\Models\TypeComplaint::class, 'role_id', 'id');
    }
}
