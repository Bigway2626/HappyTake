<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post as PostEloquent;
use App\User as UserEloquent;

class Comment extends Model {
    protected $table = 'comments';

    protected $fillable = [
        'score', 'content',
    ];

    public function post() {
        return $this -> belongsTo(PostEloquent::class);
    }

    public function user() {
        return $this -> belongsTo(UserEloquent::class);
    }
}
