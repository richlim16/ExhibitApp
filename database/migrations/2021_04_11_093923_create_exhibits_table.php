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
            $table->enum('status', ['pending', 'paid'])->default('pending');
            $table->foreignId('user_id');
            $table->string('referenceNum')->nullable();
        });
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
