<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'publishers';
    protected $fillable = [
        'code',
        'name',
        'location',
        'created_at',
        'updated_at',
    ];
    protected $timestamps = true;
}
