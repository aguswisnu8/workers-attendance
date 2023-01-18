<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'activity_type',
        'project',
        'from_time',
        'to_time',
        'note',
        'user_id',
    ];

    public function user(){
        // one user has many cars
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
