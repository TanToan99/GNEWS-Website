<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionType extends Model
{
    use HasFactory;
    
    const MISSION_LIKE = 'like';
    const MISSION_COMMENT = 'comment';
    const MISSION_INVITE = 'invite';

    protected $fillable = ['name'];
}
