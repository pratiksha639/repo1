<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;


class AgentRegisterController extends Controller
{
   
public function showRegistrationForm()
    {
        return view('auth.agent-register'); // Replace with your view path
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => ['required', 'string', 'max:255', 'unique:agents'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:agents'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'agent_code' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:255'],
            // Add more validation rules for additional fields if needed
        ]);

        Agent::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'agent_code' => $request->agent_code,
            'address' => $request->address,
            // Add more fields as needed
        ]);

        // Add any additional logic or redirection
    }
}