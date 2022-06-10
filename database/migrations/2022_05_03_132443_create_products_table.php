<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->text('product_discription');
            $table->integer('product_quantity');
            $table->decimal('sell_price',6,2);
            $table->string('discount_type')->default('value');
            $table->decimal('discount_price',6,2)->nullable();
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->timestamps();


            $table->foreign('subcategory_id')->references('id')->on('subcategories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('brand_id')->references('id')->on('brands')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
