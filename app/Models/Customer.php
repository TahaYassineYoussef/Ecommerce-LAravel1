<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // If your table name is not the plural form of the model name, specify it here:
    // protected $table = 'customers';

    // If the primary key is not 'id', specify it here:
    // protected $primaryKey = 'your_primary_key';

    // Indicates if the model should be timestamped.
    // If your table does not have `created_at` and `updated_at` columns, set this to false.
    public $timestamps = true;

    // Define which attributes are mass assignable
    protected $fillable = ['name', 'email', 'message', 'created_at', 'status'];

    // Optionally, add any relationships or additional methods here
}

