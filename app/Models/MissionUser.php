<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'gift_id', 'user_id', 'received', 'value'
    ];
}
