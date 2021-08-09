<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChanceCompany extends Model
{
    protected $table = 'ChanceCompany';
    protected $fillable = [
        'id',
        'CompanyId',
        'from_date',
        'to_date',
        'NO_trainers',
        'Field_training_need',
        'AdText',
        'status'
    ];
}
