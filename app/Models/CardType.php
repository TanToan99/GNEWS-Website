<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardType extends Model
{
    use HasFactory;
    const C_MB = 'mobifone';
    const C_VN = 'vinaphone';
    const C_VT = 'viettel';

    protected $fillable = [
        'name'
    ];
}
