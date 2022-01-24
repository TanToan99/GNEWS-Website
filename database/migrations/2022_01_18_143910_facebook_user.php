<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FacebookUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("link_fb")->nullable();
            $table->string("uid_fb")->nullable();
            $table->string("avatar")->nullable();
            $table->bigInteger('invited_id')->unsigned()->nullable();
            $table->foreign('invited_id')->references('id')->on('users');
            $table->string("times")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
