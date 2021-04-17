<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('EmailAdd', 100);

        });

        DB::table('artists')->insert(
            array(
                'id' => 1,
                'name' => 'Juan Karlos',
                'EmailAdd' => 'jaunkarlos@gmail.com'
            )
        );
        DB::table('artists')->insert(
            array(
                'id' => 2,
                'name' => 'Beyonce',
                'EmailAdd' => 'beyonce@gmail.com'
            )
        );
        DB::table('artists')->insert(
            array(
                'id' => 3,
                'name' => 'Billy Eyelash',
                'EmailAdd' => 'blash@gmail.com'
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
        Schema::dropIfExists('artists');
    }
}
