<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hikes', function (Blueprint $table) {
            $table->bigIncrements('hike_id');
            $table->string('hike_title');
            $table->string('hike_thumbnail_name');
            $table->enum('hike_difficulty', ['Easy', 'Normal', 'Hard']);
            $table->string('hike_component');
            $table->string('hike_path_router');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hikes');
    }
}
