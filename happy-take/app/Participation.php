<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post as PostEloquent;
use App\User as UserEloquent;
use App\Comment as CommentEloquent;

class Participation extends Model {
    protected $table = 'participations';

    public function post() {
        return $this -> belongsTo(PostEloquent::class);
    }

    public function user() {
        return $this -> belongsTo(UserEloquent::class);
    }
}
