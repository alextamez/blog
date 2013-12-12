<?php

class Create_Posts_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table){
			$table -> increments('id');
			$table -> string('title');
			$table -> string('content');
			$table -> integer('likes');
			$table -> integer('user_id') -> unsigned();
			$table -> foreign('user_id') ->references('id')->on('users')->on_delete('restrict');
			$table -> timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}