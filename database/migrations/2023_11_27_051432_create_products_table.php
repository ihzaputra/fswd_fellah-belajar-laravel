<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // dalam file create_products_table.php

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('category_id');
            $table->string('product_code');
            $table->decimal('price', 8, 2);
            $table->string('unit');
            $table->integer('stock');
            $table->text('description');
            $table->string('image')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories');
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
