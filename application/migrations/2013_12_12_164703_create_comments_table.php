<?php

class Create_Comments_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function($table){
			$table -> increments('id');
			$table -> string('comment', 600);
			$table -> integer('likes');
			$table -> integer('post_id') -> unsigned();
			$table -> foreign('post_id')->references('id')->on('posts')->on_delete('cascade');
			$table -> integer('user_id') -> unsigned();
			$table -> foreign('user_id')->references('id')->on('users')->on_delete('cascade');
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
		Schema::drop('comments');
	}

}