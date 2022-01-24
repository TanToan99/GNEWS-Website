<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Conner\Likeable\Likeable;

class Post extends Model
{
    use HasFactory;
    use Likeable;

    protected $fillable = [
        'author_id',
        'title',
        'content',
        'thumbnail_id',
    ];

    protected $dates = [
        'created_at'
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function thumbnail(): BelongsTo
    {
        return $this->belongsTo(Media::class);
    }

    public function hasThumbnail(): bool
    {
        return filled($this->thumbnail_id);
    }
}
