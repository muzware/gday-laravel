<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
// TODO use Illuminate\Foundation\Auth\ThrottlesLogins;
// TODO use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

/**
 * 
 * @author muz
 *
 * NOTE : User registration takes care of User creation and storage,
 * therefore these functions have not been defined.
 *
	Actions Handled By User Controller
	==========================================
	Verb 		Path 				Action 		Route Name
	------------------------------------------------------
	GET 		/user 				index 		user.index
	GET 		/user/{user} 		show 		user.show
	GET 		/user/{user}/edit 	edit 		user.edit
	PUT/PATCH 	/user/{user} 		update 		user.update
	DELETE 		/user/{user} 		destroy 	user.destroy
*/

class UserController extends BlogController
{	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		error_log('UserController.index()');
		$params = [
				'title' => 'All Users',
				'users' => User::all(),
		];
		return view('blog.user.index', $params);
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		error_log(print_r('UserController.show('.$id.')', TRUE));
		$params = array(
				'title' => 'Profile',
				'user' => User::findOrFail($id), 
				'comments' => Comment::whereUserId($id)->get()->sortByDesc('updated_at')
		);
	
		return view('blog.user.show', $params);
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		error_log(print_r('UserController.edit('.$id.')', TRUE));
		$params = [
				'title' => 'Edit',
				'user' => User::findOrFail($id),				
		];
		return view('blog.user.edit', $params);
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		error_log(print_r('UserController:update('.$id.')', TRUE));
		//var_dump($request->user());
		$user = User::findOrNew($id);
		//$user->name = $request->'muzza';
		//$user->email = 
		$user->save();
		//var_dump($user);
		//var_dump($user->all());
		
		$params = [
				'title' => 'Saved User',
				'user' => User::findOrNew($id)
				
		];
		return view('blog.user.update', $params);
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		error_log(print_r('UserController.destroy('.$id.')', TRUE));
		
		$user = User::findOrFail($id);
		$user->delete();
		
		$params = [
				'title' => 'Deleted User',
				'user' => User::findOrNew($id)
				
		];
		return view('blog.user.destroy', $params);
	}
	
}
