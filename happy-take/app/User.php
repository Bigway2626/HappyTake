<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post as PostEloquent;
use App\Participation as ParticipationEloquent;
use App\Comment as CommentEloquent;
use App\Question as QuestionEloquent;
use App\Reply as ReplyEloquent;

class User extends Authenticatable {
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'gender', 'department',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts() {
        return $this -> hasMany(PostEloquent::class);
    }

    public function participations() {
        return $this -> hasMany(ParticipationEloquent::class);
    }

    public function comments() {
        return $this -> hasMany(CommentEloquent::class);
    }

    public function questions() {
        return $this -> hasMany(QuestionEloquent::class);
    }

    public function replies() {
        return $this -> hasMany(ReplyEloquent::class);
    }
}
