<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreWeddingPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_wedding_photos', function (Blueprint $table) {
            $table->id();
            $table->integer('wedding_id')->unsigned();
            $table->foreign('wedding_id')->references('id')->on('wedding_infos');
            $table->string('img');
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
        Schema::dropIfExists('pre_wedding_photos');
    }
}
