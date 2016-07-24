<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterShotsTableAddPublishedDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shots', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->addColumn('timestamp', 'published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shots', function (Blueprint $table) {
            $table->dropColumn('published_at');
        });
    }
}
