<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Userlogin extends Authenticatable
{
    protected $table = 'userlogin';
    protected $fillable = ['email', 'password']; // Fillable fields

    // Ensure this model doesn't use Auth methods that expect hashed passwords
}

