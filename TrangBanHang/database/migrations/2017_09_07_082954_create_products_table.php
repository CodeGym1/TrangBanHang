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
        Schema::create('products',function (Blueprint $table){
            $table ->increments('id');
            $table ->string('name');
            $table ->integer('id_type')-> unsigned();

            $table ->string('description');
            $table ->float('price');
            $table ->string('image');
            $table ->boolean('is_new');
            $table ->timestamps();
            $table ->foreign('id_type')-> references('id') ->on('type_product');

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
}
