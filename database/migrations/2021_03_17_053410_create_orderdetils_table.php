<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetils', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->unsignedBigInteger('product_id');
            $table->string('color');
            $table->string('size');
            $table->string('quantity');
            $table->string('subimage');
            $table->integer('status')->default(0);
             $table->foreign('product_id')->on('products')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('orderdetils');
    }
}
