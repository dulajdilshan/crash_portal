<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeveloperRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developer_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->char('user_name',30);
            $table->char('email',50)->unique();
            $table->char('name',60);
            $table->char('github_url');
            $table->char('linkedin_url');
            $table->char('fb_url');
            $table->boolean('admin_confirmed');
            $table->boolean('developer_added');
            $table->boolean('email_sent');
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
        Schema::dropIfExists('developer_requests');
    }
}
