<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
class CreateExhibitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibits', function (Blueprint $table) {
            $table->id();
            $table->timestamp('startDate');
            $table->timestamp('endDate')->nullable();
            $table->string('theme', 100);
            $table->string('title', 150);
            $table->string('description');
            $table->enum('status', ['pending', 'paid', 'completed'])->default('pending');
            $table->foreignId('user_id');
        });

        DB::table('exhibits')->insert(
            array(
                'id' => 1,
                'startDate' => now(),
                'title' => 'monke',
                'theme' => 'Jungle Madness',
                'description' => 'lorem ipsum choo choo chooo imm a train',
                'user_id' => 1
            )
        );
        DB::table('exhibits')->insert(
            array(
                'id' => 2,
                'startDate' => now(),
                'title' => 'Raymond is a weeb',
                'theme' => 'Weeb',
                'description' => 'lorem ipsum choo choo chooo imm a train',
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
        Schema::dropIfExists('exhibits');
    }
}
