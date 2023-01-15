<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotteryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_details', function (Blueprint $table) {
            $table->id();
            $table->string('a1')->nullable();
            $table->string('a2')->nullable();
            $table->string('a3')->nullable();
            $table->string('a4')->nullable();
            $table->string('b1')->nullable();
            $table->string('b2')->nullable();
            $table->string('b3')->nullable();
            $table->string('b4')->nullable();
            $table->string('c1')->nullable();
            $table->string('c2')->nullable();
            $table->string('c3')->nullable();
            $table->string('c4')->nullable();
            $table->string('d1')->nullable();
            $table->string('d2')->nullable();
            $table->string('d3')->nullable();
            $table->string('d4')->nullable();
            $table->string('type')->nullable();
            $table->date('date');            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lottery_details');
    }
}
