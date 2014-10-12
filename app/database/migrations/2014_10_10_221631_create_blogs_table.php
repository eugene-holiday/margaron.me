<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration {

	public function up()
	{
        Schema::create('blogs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('intro');
            $table->text('content');
            $table->integer('user_id');
            $table->timestamps();
        });
	}

	public function down()
	{
        Schema::drop('blogs');
	}

}
