<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;

    protected $table = 'patients';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'phoneNumber',
        'docPhoto',
    ];
}
