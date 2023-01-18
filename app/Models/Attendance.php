<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'clock_in',
        'clock_out',
        'rest_start',
        'rest_finish',
        'user_id',
    ];

    public function user(){
        // one user has many cars
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
