<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
        'author',
        'status',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Auto generate slug when creating news
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = Str::slug($news->title);
            }
        });

        static::updating(function ($news) {
            if ($news->isDirty('title') && empty($news->slug)) {
                $news->slug = Str::slug($news->title);
            }
        });
    }

    // Scope for published news
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                    ->where('published_at', '<=', now());
    }

    // Scope for draft news
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    // Get readable published date
    public function getFormattedPublishedAtAttribute()
    {
        return $this->published_at?->format('d M Y');
    }

    // Check if news is published
    public function getIsPublishedAttribute()
    {
        return $this->status === 'published' && $this->published_at <= now();
    }
}
