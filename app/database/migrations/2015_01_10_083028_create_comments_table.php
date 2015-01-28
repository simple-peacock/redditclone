<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('userid');
			$table->text('comment');
			$table->integer('points');

			// our foreign key referencing the posts table
      		$table->integer('post_id')->unsigned();
      		$table->foreign('post_id')
            	->references('id')->on('posts')
            	->onDelete('cascade');
            	
            // our foreign key referencing the users table
      		$table->integer('user_id')->unsigned();
      		$table->foreign('user_id')
            	->references('id')->on('users');

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
		Schema::table('comments', function(Blueprint $table)
		{
			Schema::drop('comments');
		});
	}

}
