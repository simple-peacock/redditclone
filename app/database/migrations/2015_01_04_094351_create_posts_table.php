<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('postid'); // primary key
			
			$table->integer('userid'); // referencing who made the post
			
			$table->string('title');   // add max length?
			$table->boolean('islink');
			$table->string('link');
			$table->text('text'); // optional - if not link
			
			$table->integer('points');
			
			// slug?
			
			// # of comments?
			
			$table->string('subreddit');
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
		Schema::table('posts', function(Blueprint $table)
		{
			Schema::drop('posts');
		});
	}

}
