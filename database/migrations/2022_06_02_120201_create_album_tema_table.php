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
        Schema::create('album_tema', function (Blueprint $table) {
            $table->foreignId('album_id')->constrained('albumes');
            $table->foreignId('tema_id')->constrained('temas');
            $table->primary(['album_id', 'tema_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_tema');
    }
};
