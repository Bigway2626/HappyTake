<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post as PostEloquent;
use App\User as UserEloquent;
use App\Reply as ReplyEloquent;

class Question extends Model {
    protected $table = 'questions';

    protected $fillable = [
        'content',
    ];

    public function post() {
        return $this -> belongsTo(PostEloquent::class);
    }

    public function user() {
        return $this -> belongsTo(UserEloquent::class);
    }

    public function replies() {
        return $this -> hasMany(ReplyEloquent::class);
    }
}
