<?php
use Illuminate\Support\Facades\Hash;
use App\Models\Userlogin;

Userlogin::create([
    'email' => 'Taha@u.com',
    'password' => Hash::make('aaa'), // Ensure the password is hashed
]);
