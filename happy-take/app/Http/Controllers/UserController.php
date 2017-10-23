<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Hash;
use App\Post;
use App\Step;
use App\Participation;
use App\Comment;

class UserController extends Controller {
    public function __construct() {
        $this -> middleware('auth');
    }

    public function my_posts() {
        $posts = Post::where('user_id', Auth::user() -> id) -> orderBy('date', 'desc') -> paginate(10);
        return view('my_posts', ['posts' => $posts]);
    }

    public function my_post($id) {
        $post = Post::find($id);
        if ($post -> user -> id == Auth::user() -> id) {
            return view('my_post', ['post' => $post]);
        } else return redirect('/my_posts');
    }

    public function create_post_page() {
        return view('create_post');
    }

    public function create_post(Request $request) {
        $post = new Post;
        $post -> user_id = Auth::user() -> id;
        $post -> date = $request -> date;
        $post -> from = $request -> from;
        $post -> to = $request -> to;
        $post -> number = $request -> number;
        $post -> save();
        /* 儲存路線的Array */
        /* $steps = json_encode($request -> steps);
        $sql = array();
        foreach ($steps as $step) {
            $sql[] = array(
                'post_id' => $post -> id,
                'content' => $step['instructions'],
            );
        }
        DB::table('steps') -> insert($sql); */
        return redirect('/my_posts') -> with('success', '發布成功！');
    }

    public function my_participations() {
        $participations = Participation::where('user_id', Auth::user() -> id) -> orderBy('created_at', 'desc') -> paginate(10);
        return view('my_participations', ['participations' => $participations]);
    }

    public function participation($id) {
        $participation = Participation::find($id);
        if ($participation -> user -> id == Auth::user() -> id) {
            return view('participation', ['participation' => $participation]);
        } else return redirect('/my_participations');
    }

    public function create_participation(Request $request) {
        $participation = new Participation;
        $participation -> post_id = $request -> post_id;
        $participation -> user_id = Auth::user() -> id;
        $participation -> save();
        return redirect('/my_participations') -> with('success', '加入共乘名單成功！');
    }

    public function create_comment(Request $request) {
        $comment = new Comment;
        $comment -> post_id = $request -> post_id;
        $comment -> user_id = Auth::user() -> id;
        $comment -> score = $request -> score;
        $comment -> content = $request -> content;
        $comment -> save();
        return redirect('/my_participations') -> with('success', '撰寫評論成功！');
    }

    public function profile() {
        return view('profile');
    }

    public function edit_profile(Request $request) {
        $user = Auth::user();
        $user -> name = $request -> name;
        $user -> gender = $request -> gender;
        $user -> department = $request -> department;
        $user -> tel = $request -> tel;
        $user -> introduction = $request -> introduction;
        $user -> save();
        return back() -> with('success', '個人資料更新成功！');
    }

    public function edit_avatar(Request $request) {
        $user = Auth::user();
        $file = $request -> file('avatar');
        $file -> move(public_path().'/avatar/', $file -> getClientOriginalName());
        $user -> avatar = $file -> getClientOriginalName();
        $user -> save();
        return back() -> with('success', '個人頭像更新成功！');
    }

    public function change_password(Request $request) {
        $user = Auth::user();
        if ($request -> confirm_password == $request -> new_password) {
            if (!Hash::check($request -> current_password, $user -> password)) return back() -> with('danger', '目前密碼不正確！');
            else {
                $user -> password = bcrypt($request -> new_password);
                $user -> save();
                return back() -> with('success', '密碼變更成功！');
            }
        } else return back() -> with('warn', '確認密碼跟新密碼不一致！');
    }
}
