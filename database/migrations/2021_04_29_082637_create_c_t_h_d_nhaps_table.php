<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCTHDNhapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill-import_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_bill');
            $table->unsignedInteger('id_product');
            $table->integer('so_luong');
            $table->float('don_gia');
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
        Schema::dropIfExists('bill-import_detail');
    }
}
