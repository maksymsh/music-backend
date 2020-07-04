<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('band_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('band_id');
            $table->unsignedBigInteger('tag_id');

            $table->primary(['band_id', 'tag_id']);

            $table->foreign('band_id')->references('id')->on('bands')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('band_tag');
    }
}
