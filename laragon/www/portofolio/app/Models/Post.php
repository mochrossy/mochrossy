<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'image',
        'category',
        'author',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    /**
     * Route model binding pakai slug, bukan id.
     * Jadi /blog/{slug} otomatis resolve ke Post.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Scope: hanya post yang sudah dipublikasikan.
     */
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }
}
