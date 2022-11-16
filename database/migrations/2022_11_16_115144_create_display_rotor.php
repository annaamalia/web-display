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
        Schema::create('display_rotor', function (Blueprint $table) {
            $table->id();
            $table->string('webdisplay_webdisplay_rotor_CODE_VALUE');
            $table->string('webdisplay_webdisplay_rotor_TIMESTAMP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('display_rotor');
    }
};
