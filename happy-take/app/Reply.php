<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question as QuestionEloquent;
use App\User as UserEloquent;

class Reply extends Model {
    protected $table = 'replies';

    protected $fillable = [
        'content',
    ];

    public function question() {
        return $this -> belongsTo(QuestionEloquent::class);
    }

    public function user() {
        return $this -> belongsTo(UserEloquent::class);
    }
}
