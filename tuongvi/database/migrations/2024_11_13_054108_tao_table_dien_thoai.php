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
    public function up() {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->unique();
            $table->string('description', 1000)->nullable();
            $table->dateTime('release_date');
            $table->double('price', 8, 2);
            $table->double('sale_price', 8, 2)->nullable();
            $table->double('image_url', 200)->nullable();
            $table->integer('stock_quantity')->default(0);
            $table->boolean('featured')->default(0);
            $table->boolean('visible')->default(1);
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
        //
    }
};
