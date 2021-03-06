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

			$table->increments('id'); // primary key
			$table->string('title');   // add max length?
			$table->boolean('islink');
			$table->string('link');  // we should rename this url
			$table->text('text'); // optional - if not link

			$table->integer('points');

			$table->string('subreddit');

      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')
        ->references('id')->on('users')
      	->onDelete('cascade');

			$table->timestamps();

		});

	} // end up() function



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

	} // end down() function

}
