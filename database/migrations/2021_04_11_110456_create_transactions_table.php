<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamp('TransactionDate')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreignId('ArtistID');
        });
        DB::table('transactions')->insert(
            array(
                'id' => 1,
                'ArtistID' => 1
            )
        );
        DB::table('transactions')->insert(
            array(
                'id' => 2,
                'ArtistID' => 2
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
        Schema::dropIfExists('transactions');
    }
}
