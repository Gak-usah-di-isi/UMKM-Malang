<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('umkm_id');
            $table->integer('product_category_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('price', 12, 2);
            $table->integer('stock');
            $table->integer('total_sales')->default(0);
            $table->string('buy_link')->nullable();
            $table->boolean('is_favorite')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
