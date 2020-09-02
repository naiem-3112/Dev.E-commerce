<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapros', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pro_brand_id');
            $table->foreign('pro_brand_id')->references('id')->on('brands');
            $table->string('proName');
            $table->string('proTag');
            $table->integer('price');
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
        Schema::dropIfExists('datapros');
    }
}
