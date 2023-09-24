<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\User;

class UserService
{
    public function store(Array $userData, Array $address)
    {
        $user = User::where('email', $userData['email'])->first(['id', 'name', 'email']);

        if(!$user){
            $user = User::create([... $userData, 'password' => Bcrypt(Str::Uuid())]);
        }

        $user->addresses()->create($address);

        return $user;
    }
}