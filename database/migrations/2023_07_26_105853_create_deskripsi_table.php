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
        Schema::create('deskripsi', function (Blueprint $table) {
            $table->id();
            $table->string('tentang');
            $table->string('imgtentang');
            $table->string('subjudulunggul');
            $table->string('keunggulan');
            $table->string('service');
            $table->string('imgservice');
            $table->string('team');
            $table->string('portofolio');
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
        Schema::dropIfExists('deskripsi');
    }
};
