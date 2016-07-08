<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUserProfileAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_profile', function (Blueprint $table) {
            $table->text('bio', 200);
            $table->text('bio_long', 500);
            $table->string('website', 255);
            $table->string('username', '150');
            $table->string('avatar', 255);
            $table->smallInteger('status');
            $table->smallInteger('gender');
            $table->integer('mobile_number');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_profile', function (Blueprint $table) {
            $table->drop();
        });
    }
}
