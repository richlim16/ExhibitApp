<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoetriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poetries', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('body');
            $table->string('theme');
            $table->foreignId('user_id');
            $table->foreignId('exhibitID')->nullable();
        });
        DB::table('poetries')->insert([
            'title' => 'sample poetry #1',
            'body' => 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
            'theme' => 'weeb',
            'user_id' => '2',
        ]);
        DB::table('poetries')->insert([
            'title' => 'sample poetry #2',
            'body' => 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
            'theme' => 'weeb',
            'user_id' => '2',
        ]);
        DB::table('poetries')->insert([
            'title' => 'sample poetry #3',
            'body' => 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
            'theme' => 'weeb',
            'user_id' => '2',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poetries');
    }
}
