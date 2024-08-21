<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Product name
            $table->text('description')->nullable(); // Product description, can be null
            $table->decimal('price', 8, 2); // Product price with 8 digits total and 2 decimal places
            $table->string('image')->nullable(); // Image field, can be null
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
