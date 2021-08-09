<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestTrain extends Model
{
    protected $table = 'RequestTrain';
    protected $fillable = [
        'id',
        'CompanyId',
        'TrainingId',
        'first_name',
        'secund_name',
        'last_name',
        'phhone_no',
        'email',
        'University',
        'college',
        'Specialization',
        'training_type',
        'Field_training',
        'Experience_level',
        'request_Text',


    ];

//    public function Trainer()
//    {
//        return $this->belongsTo('App\Trainer');
//
//    }
}
