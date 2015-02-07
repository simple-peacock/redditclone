<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {


	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	public function up()
	{

		Schema::create('users', function(Blueprint $table)
		{

			$table->increments('id');
  		$table->string('username', 20)->unique();
  		$table->string('email', 100);
  		$table->string('password', 64);
  		$table->string('remember_token', 100)->nullable();
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
		Schema::table('users', function(Blueprint $table)
		{

			Schema::drop('users');

		});
		
	} // end down() function


}
