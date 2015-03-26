<?php namespace App\Http\Controllers;
	  use App\User;
	  use App\Post;
	  use App\Comment;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$post = User::all();
		$post->load('posts','posts.comments');		
		return $post;
		//$post = new Post;
		//$post->user_id = 2;
		//$post->content = "Post";
		//$post->title = "Title";
		//$post->save();
		
		//$comment = new Comment;
		//$comment->user_id = 1;
		//$comment->content = "Text";
		//$comment->post_id = 1;
		//$comment->save();
		
		//return $users = User::all();
		//$user = new User;
		//$user->name = "Andrey";
		//$user->save();
		//return view('welcome');
	}

}
