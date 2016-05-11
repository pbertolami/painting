<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
                'first_name',
                'last_name',
                'email',
                'street',
                'zip',
                'city',
                'state',
                'phone',
                'squarefoot',
                'siding',
                'description'
    ];
}
