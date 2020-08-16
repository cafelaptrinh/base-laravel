<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';

    protected $fillable=[
        'pid','name','slug','status','orderBy'
    ];
}
