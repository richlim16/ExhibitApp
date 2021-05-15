<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->string('MusicTitle', 100);
            $table->string('genre', 50);
            $table->foreignId('user_id');
        });

        DB::table('music')->insert(
            array(
                'id' => 1,
                'MusicTitle' => 'Bad Guy',
                'genre' => 'emo girl music eyy',
                'user_id' => 3
            )
        );
        DB::table('music')->insert(
            array(
                'id' => 2,
                'MusicTitle' => 'To The Left',
                'genre' => 'Hiphop',
                'user_id' => 2
            )
        );
        DB::table('music')->insert(
            array(
                'id' => 3,
                'MusicTitle' => 'Buwan',
                'genre' => 'sadboi',
                'user_id' => 1
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music');
    }
}
