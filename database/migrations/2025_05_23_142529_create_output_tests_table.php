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
        Schema::create('output_tests', function (Blueprint $table) {
            $table->id();
            $table->string('team');
            $table->double('pts_avg', 5, 1);
            $table->double('ast_avg', 4, 1);
            $table->double('reb_avg', 4, 1);
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
        Schema::dropIfExists('output_tests');
    }
};
