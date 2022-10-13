<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_category');
            $table->string('product_id');
            $table->string('product_name');
            $table->string('brand_name');
            $table->float('item_price');
            $table->integer('quantity');
            $table->date('manufacture_date');
            $table->date('expire_date');
            $table->string('manufacturer_details');
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
        Schema::dropIfExists('product_tables');
    }
};
