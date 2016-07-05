<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPublishablesToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shots', function (Blueprint $table) {
            $table->string("publishable_type")->nullable()->after('published_as');
            $table->integer("publishable_id")->default(0)->after('publishable_type');

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
            $table->dropColumn(['publishable_type', 'publishable_id']);
        });
    }
}
