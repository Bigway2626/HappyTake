<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as UserEloquent;
use App\Step as StepEloquent;
use App\Participation as ParticipationEloquent;
use App\Comment as CommentEloquent;
use App\Question as QuestionEloquent;

class Post extends Model {
    protected $table = 'posts';
    
    protected $fillable = [
        'date', 'from', 'to', 'number',
    ];

    public function user() {
        return $this -> belongsTo(UserEloquent::class);
    }

    public function steps() {
        return $this -> hasMany(StepEloquent::class);
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
}
