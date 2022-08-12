<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personal_records', function (Blueprint $table) {
            //
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('movement_id')->references('id')->on('movements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_records', function (Blueprint $table) {
            //
        });
    }
};
