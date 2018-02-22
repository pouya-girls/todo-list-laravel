<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table='todos';

    protected $fillable = [
        'name',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
