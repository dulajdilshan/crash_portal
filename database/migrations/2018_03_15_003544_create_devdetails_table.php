<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devdetails', function (Blueprint $table) {
            $table->integer('developer_id')->unsigned()->unique();
            $table->string('github_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('fb_link')->nullable();
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
        Schema::dropIfExists('devdetails');
    }
}
