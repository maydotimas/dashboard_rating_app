<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('reactions');
        Schema::create('reactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mobile_id');
            $table->string('lat');
            $table->string('long');
            $table->enum('reaction',['VG','G','O','P','VP']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reactions');
    }
}
