<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasils', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('nm_kriteria')->nullable();
            $table->string('nm_genre')->nullable();
            $table->string('nm_karakter')->nullable();
            $table->float('hasil_kriteria')->nullable();
            $table->float('hasil_karakter')->nullable();
            $table->float('hasil_genre')->nullable();
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
        Schema::dropIfExists('hasils');
    }
}
