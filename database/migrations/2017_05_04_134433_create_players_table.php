<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{

    public function up()
    {
        Schema::create('players', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('group_id')->unsigned();
            $table->date('birthday');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('players');
    }
}
