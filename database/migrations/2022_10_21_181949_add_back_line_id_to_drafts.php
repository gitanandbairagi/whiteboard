<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBackLineIdToDrafts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drafts', function (Blueprint $table) {
            $table->unsignedBigInteger('back_line_id')->nullable();
            $table->foreign('back_line_id')->references('id')->on('back_lines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drafts', function (Blueprint $table) {
            $table->dropColumn('back_line_id');
        });
    }
}
