<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gift extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'value', 'quantity', 'giftCategory_id'
    ];

    
    public function giftCategory(): BelongsTo
    {
        return $this->belongsTo(GiftCategory::class);
    }
}
