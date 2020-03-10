<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowerRecord extends Model
{
    protected $table = 'borrower_records';
    protected $fillable = [
        'book_id',
        'user_id',
        'start_date',
        'end_date',
        'status',
        'created_at',
        'updated_ad',
    ];
    protected $timestamps = true;
}
