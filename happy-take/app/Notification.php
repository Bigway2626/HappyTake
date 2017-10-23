<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as UserEloquent;

class Notification extends Model {
    protected $table = 'notifications';

    public function from() {
        return $this -> belongsTo(UserEloquent::class);
    }

    public function to() {
        return $this -> belongsTo(UserEloquent::class);
    }
}
