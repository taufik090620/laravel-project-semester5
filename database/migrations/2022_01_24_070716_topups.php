<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Topups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('topups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jumlah_topup');
            $table->timestamp('tanggal', $precision = 0);
            $table->integer('id_reksadana');
            $table->integer('bank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('topups');
    }
}
