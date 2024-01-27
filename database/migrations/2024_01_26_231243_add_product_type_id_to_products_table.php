<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductTypeIdToProductsTable extends Migration
{
    
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('product_type_id')->constrained()->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['product_type_id']);
            $table->dropColumn('product_type_id');
        });
    }
};
