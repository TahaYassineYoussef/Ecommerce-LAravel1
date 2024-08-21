<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'products';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'name',
        'description',
        'price',
        'image', // Assuming you have an image field
        // Add other fields as needed
    ];

    // Optionally, you can specify the attributes that should be hidden for arrays
    protected $hidden = [
        // Hidden attributes, if any
    ];

    // Optionally, you can specify the attributes that should be cast to a specific data type
    protected $casts = [
        'price' => 'decimal:2', // Example for casting price to decimal with 2 decimal points
    ];
}
