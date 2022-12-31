<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomEscape extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'playable_user_cnt',
        'play_time',
    ];
}
