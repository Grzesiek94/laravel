<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('sku');
            $table->string('name');
            $table->string('asin');
            $table->string('ean');
            $table->string('condition');
            $table->string('land');
            $table->integer('price');
            $table->integer('category_id')->unsigned()->index()->nullable();
            $table->integer('palette_id')->unsigned()->index();
            $table->integer('price_amazon')->nullable();
            $table->text('desc_amazon')->nullable();
            $table->string('name_amazon')->nullable();
            $table->string('placement')->nullable();
            $table->text('comments')->nullable();
            $table->integer('user_id')->nullable();
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
