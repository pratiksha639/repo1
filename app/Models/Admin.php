<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'username', 'email', 'password', 'full_name', 'phone_number'
        // Add more fields as needed
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'admin_roles');
    }

    // Example method to check if the admin has a specific role
    public function hasRole($roleName)
    {
        return $this->roles->contains('name', $roleName);
    }
}
