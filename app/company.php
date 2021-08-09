<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class company extends Model
{
    use softDeletes;
    protected $table = 'companyInfo';
    protected $fillable = [
        'name',
        'email',
        'sectoreWorks',
        'city',
        'stutusTrain',
        'Addresse',
        'phone',
        'TrainingSpecialty',
        'noTrain',
        'about',
        'UrlImg',
        'deleted_at'
    ];

//    public function ChanceCompany()
//    {
//        return $this->belongsTo('App\ChanceCompany');
//
//    }
//
//    public function User()
//    {
//        return $this->hasOne('App\User');
//
//    }
//
//    public function Trainer()
//    {
//        return $this->hasMany('App\Trainer');
//
//    }
}
