<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   // run the migrations
    public function up(): void
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->id();
            $table->string('name',255); //max 255 characters
            $table->text('description');
            $table->timestamps();
        });
    }

      //Reverse the migrations.
     
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
