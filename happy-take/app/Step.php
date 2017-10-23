<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as UserEloquent;
use App\Participation as ParticipationEloquent;
use App\Comment as CommentEloquent;

class Step extends Model {
    protected $table = 'steps';
    
    protected $fillable = [
        'content',
    ];

    public function post() {
        return $this -> belongsTo(PostEloquent::class);
    }
}
