<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use SoftDeletes;
    protected $dates=[ 'deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
