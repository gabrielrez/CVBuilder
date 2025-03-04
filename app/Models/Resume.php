<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'picture',
        'first_name',
        'last_name',
        'email',
        'phone',
        'linkedin',
        'website',
        'personal_description',
    ];
}
