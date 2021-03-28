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
            $table->id();
            $table->unsignedBigInteger('catagory_id');
            $table->string('product_name')->nullable();
            $table->text('color_id')->nullable();
            $table->text('size_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('regular_price')->nullable();
            $table->string('offer_price')->nullable();
            $table->string('pdiscount')->nullable();
            $table->longtext('description')->nullable();
            $table->string('image')->nullable();
            $table->string('subimage')->nullable();
            $table->string('status')->default(1);
             $table->foreign('catagory_id')->on('catagories')->references('id')->onDelete('cascade');
            $table->timestamps();
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
