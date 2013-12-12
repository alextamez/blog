<?php
class Posts_Controller extends Base_Controller{

	public $restful = true;

	public function get_index(){
		$posts = Post::all();
		return View::make('posts.index')->with('posts', $posts);
	}

	public function get_create(){
		$users = User::all();
		return View::make('posts.create')->with('users', $users);
	}

	public function post_create(){
		$data = $_POST;
		$post = Post::create($data);
		return Redirect::to('posts');
	}

	public function get_update($post_id){
		$post = Post::find($post_id);

		if(is_null($post)){
			return Redirect::to('posts');
		}

		return View::make('posts.edit')->with('post', $post);

	}

	public function post_update($post_id){
		$post = Post::find($post_id);

		if(is_null($post)){
			return Redirect::to('posts');
		}

		$data = $_POST;
		$post = Post::update($post_id, $data);
		return Redirect::to('posts');
	}

	public function get_delete($post_id){
		$post = Post::find($post_id);

		if(is_null($post)){
			return Redirect::to('posts');
		}

		$post->delete();
		return Redirect::to('posts');

	}

}
?>