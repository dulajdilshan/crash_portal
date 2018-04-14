<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrashInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crash_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('crash_id');
            $table->char('category');
            $table->string('crash_details');
            $table->unsignedInteger('reporter_id');
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
        Schema::dropIfExists('crash_infos');
    }
}
