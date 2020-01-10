<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //
    protected $table = 'candidates';

    protected $fillable = [

        'first_name',
        'last_name',
        'dob',
        'email',
        'phone',
        'candidate_id',
        'type_id'
    ];
}
