<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $table = 'trainer';
    protected $fillable = [
        'id',
        'first_name',
        'secund_name',
        'last_name',
        'email'

    ];

//    public function RequestTrain()
//    {
//        return $this->belongsTo('App\RequestTrain');
//
//    }
}
