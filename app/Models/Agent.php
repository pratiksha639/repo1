<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = [
        'username', 'email', 'password', 'agent_code', 'address'
        // Add more fields as needed
    ];
    public function formattedAddress()
    {
        return $this->address . ', ' . 'City Name'; // Add logic to format the address
    }
}
