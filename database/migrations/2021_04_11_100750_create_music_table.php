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
            $table->id('MusicID');
            $table->string('MusicTitle', 100);
            $table->string('genre', 50);
            $table->foreignId('ArtistID');
        });

        DB::table('music')->insert(
            array(
                'MusicID' => 1,
                'MusicTitle' => 'Bad Guy',
                'genre' => 'emo girl music eyy',
                'ArtistID' => 3
            )
        );
        DB::table('music')->insert(
            array(
                'MusicID' => 2,
                'MusicTitle' => 'To The Left',
                'genre' => 'Hiphop',
                'ArtistID' => 2
            )
        );
        DB::table('music')->insert(
            array(
                'MusicID' => 3,
                'MusicTitle' => 'Buwan',
                'genre' => 'sadboi',
                'ArtistID' => 1
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
