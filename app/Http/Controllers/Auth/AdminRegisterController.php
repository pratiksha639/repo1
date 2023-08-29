<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminRegisterController extends Controller
{
    // public function create(array $data)
    // {
    //     $user = User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    
    //     $user->roles()->attach(Role::where('name', 'admin')->first());
    
    //     return $user;
    // }

    public function showRegistrationForm()
    {
        return view('auth.admin-register'); // Replace with your view path
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => ['required', 'string', 'max:255', 'unique:admins'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'full_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:20'],
            // Add more validation rules for additional fields if needed
        ]);

        Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            // Add more fields as needed
        ]);

        // Add any additional logic or redirection
    }

}
