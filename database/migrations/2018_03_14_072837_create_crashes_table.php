<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crashes', function (Blueprint $table) {
            $table->increments('id');
            $table->char('crash_title',100);
            $table->dateTime('report_created_at');
            $table->unsignedInteger('developer_id');
            $table->unsignedInteger('progress');
            $table->boolean('solved');
            $table->string('development_status');
//            $table->char('uploaded_by',50);
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
        Schema::dropIfExists('crashes');
    }
}
