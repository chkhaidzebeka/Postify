<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Mail\PostLiked;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostLikeController extends Controller
{

	public function __construct()
	{
		$this->middleware(['auth']);
	}

	public function store(Post $post,Request $request)
	{

		if ($post->likedBy(auth()->user())) {
			return redirect()->back()->with([
				'error'	=>	'You have already liked it'
		]);
		}
		
		$post->likes()->create([
			'user_id'	=> 	auth()->user()->id
		]);

		if(!$post->likes()->onlyTrashed()->where('user_id',auth()->user()->id)->count()) {
			Mail::to($post->user)->send(new PostLiked(auth()->user(),$post));
		}

		return back();
	}

	public function destroy(Post $post, Request $request)
	{
		auth()->user()
			->likes()
			->where('post_id',$post->id)
			->delete();

		return back();
	}
}
