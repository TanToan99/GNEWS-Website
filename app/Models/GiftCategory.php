<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftCategory extends Model
{
    use HasFactory;
    
    const GIFT_CARD = 'card';
    const GIFT_WISH = 'wish';

    protected $fillable = ['name'];
}
