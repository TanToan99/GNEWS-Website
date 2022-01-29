<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GiftUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'gift_id', 'user_id', 'received', 'value'
    ];

    public function gift(): BelongsTo
    {
        return $this->belongsTo(Gift::class);
    }
}
