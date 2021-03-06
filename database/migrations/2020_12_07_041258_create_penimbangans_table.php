<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenimbangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penimbangans', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_timbang');
            $table->integer('user_id');
            $table->foreignId('balita_id')->constrained('balitas')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('bb');
            $table->decimal('tb');
            $table->timestamps();
            $table->string('catatan');
            $table->string('acara_kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penimbangans');
    }
}
