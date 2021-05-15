<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('description', 150);
            $table->string('theme');
            $table->string('photo');
            $table->foreignId('user_id');
            $table->foreignId('exhibitID')->nullable();
        });

        DB::table('art')->insert([
            'title' => 'sample art #1',
            'description' => 'lorem ipsum choo choo choo choo',
            'theme' => 'space',
            'photo' => 'sample1.jpg',
            'user_id' => 1
        ]);
        DB::table('art')->insert([
            'title' => 'sample art #2',
            'description' => 'lorem ipsum choo choo choo choo',
            'theme' => 'food',
            'photo' => 'sample2.jpg',
            'user_id' => 2
        ]);
        DB::table('art')->insert([
            'title' => 'sample art #3',
            'description' => 'lorem ipsum choo choo choo choo',
            'theme' => 'anime',
            'photo' => 'sample3.jpg',
            'user_id' => 1
        ]);
        DB::table('art')->insert([
            'title' => 'sample art #4',
            'description' => 'lorem ipsum choo choo choo choo',
            'theme' => 'games',
            'photo' => 'sample4.jpg',
            'user_id' => 3
        ]);
        DB::table('art')->insert([
            'title' => 'sample art #4',
            'description' => 'lorem ipsum choo choo choo choo',
            'theme' => 'nature',
            'photo' => 'sample4.jpg',
            'user_id' => 4
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('art');
    }
}
