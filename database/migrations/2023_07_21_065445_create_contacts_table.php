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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->string('whatsapp');
            $table->string('linkwhatsapp');
            $table->string('email');
            $table->string('linkemail');
            $table->string('telepon');
            $table->string('maps_embed');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('tiktok');
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
        Schema::dropIfExists('contacts');
    }
};
