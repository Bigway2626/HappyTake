<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Post;
use App\Comment;

class PostController extends Controller {
    public function index() {
        $posts = Post::orderBy('date', 'desc') -> paginate(10);
        return view('index', ['posts' => $posts]);
    }

    public function search_post(Request $request) {
        $posts = Post::where('from', 'LIKE', '%'.$request -> search.'%') -> orWhere('to', 'LIKE', '%'.$request -> search.'%') -> paginate(10);
        return view('index', ['posts' => $posts]);
    }

    public function post($id) {
        $post = Post::find($id);
        $posts = Post::where('user_id', $post -> user -> id) -> get();
        $score = Comment::whereIn('post_id', $posts -> pluck('id') -> toArray()) -> get() -> avg('score');
        return view('post', ['post' => $post, 'score' => $score]);
    }
}
