<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenrePerformerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_performer', function (Blueprint $table) {
            $table->unsignedbigInteger('genre_id')->nullable();
            $table->unsignedbigInteger('performer_id')->nullable();
    
            $table->primary([
                'genre_id',
                'performer_id'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre_performer');
    }
}
