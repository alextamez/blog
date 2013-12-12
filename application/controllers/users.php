<?php
class Users_Controller extends Base_Controller{

	public $restful = true;

	public function get_index(){
		$users = User::all();
		return View::make('users.index')->with('users', $users);
	}

	public function get_create(){
		return View::make('users.create');
	}

	public function post_create(){
		$data = $_POST;
		$user = User::create($data);
		return Redirect::to('users');
	}

	public function get_update($user_id){
		$user = User::find($user_id);

		if(is_null($user)){
			return Redirect::to('users');
		}

		return View::make('users.edit')->with('user', $user);

	}

	public function post_update($user_id){
		$user = User::find($user_id);

		if(is_null($user)){
			return Redirect::to('users');
		}

		$data = $_POST;
		$user = User::update($user_id, $data);
		return Redirect::to('users');
	}

	public function get_delete($user_id){
		$user = User::find($user_id);

		if(is_null($user)){
			return Redirect::to('users');
		}

		$user->delete();
		return Redirect::to('users');

	}

}
?>