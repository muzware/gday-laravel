<?php
/**
	 Actions Handled By Entry Controller
	 ===================================
	 Verb 		Path 					Action 		Route Name
	 --------------------------------------------------------------
	 GET 		/comment 				index 		comment.index
	 GET 		/comment/create 		create 		comment.create
	 POST 		/comment 				store 		comment.store
	 GET 		/comment/{comment} 		show 		comment.show
	 GET 		/comment/{comment}/edit edit 		comment.edit
	 PUT/PATCH 	/comment/{comment} 		update 		comment.update
	 DELETE 	/comment/{comment} 		destroy 	comment.destroy
 
 */
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends BlogController
{
	/**
	 * Display a listing of the comment.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get all the comments
		$comments = Comment::all();
		
		// Initialise view parameters
		$params = [
				'title' => 'All Comments',
				'comments' => $comments
		];
		
		// Return the rendered view
		return view('blog.comment.index', $params);
	}
	
	/**
	 * Show the form for creating a new comment.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Create a new comment
		$comment = new Comment;
		$comment->body = '';
		$comment->user_id = 1;
		$comment->entry_id = 1;
		
		// Initialise view parameters
		$params = [
				'title' => 'Create Blog Comment',
				'comment' => $comment
		];
		
		// Return the rendered view
		return view('blog.comment.create', $params);
	}
	
	/**
	 * Store a newly created comment in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		// Create a new Coment and populate with request data
		$comment = new Comment;
		$comment->body = $request->input('body');
		// Store the new comment in the database
		$comment->save();
		
		// Initialise view parameters
		$params = [
				'title' => 'Stored Blog Comment',
				'comment' => $comment
		];
		
		// Return the rendered view
		return view('blog.comment.store', $params);
	}
	
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$comment = Comment::findOrNew($id);
		$params = [
				'title' => 'Show Blog Comment',
				'comment' => $comment,
				'comments' => array()
		];
		return view('blog.comment.show', $params);
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$comment = Comment::findOrFail($id);
		// TODO update db
		$params =[
				'title' => 'Edit Blog Comment',
				'comment' => $comment
		];
		return view('blog.comment.edit', $params);
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		// Store updated Comment in the database
		$comment = Comment::findOrNew($id);
		$comment->title = $request->input('title'); // or $request->only('title', 'body');
		$comment->body = $request->input('body');
		$comment->save();
	
		// Initialise view parameters
		$params = [
				'title' => 'Updated Blog Comment',
				'comment' => $comment
		];
		// Return the rendered view
		return view('blog.comment.update', $params);
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// Delete the database comment
		$comment = Comment::findOrFail($id);
		$comment->delete();
		$params = [
				'title' => 'Destroyed Blog Comment!',
				'comment' => $comment
		];
		return view('blog.comment.destroy', $params);
	}
	
	
}
