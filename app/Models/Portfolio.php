<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portfolio extends Model
{
    protected $fillable = [
        'service_id',
        'title',
        'slug',
        'excerpt',
        'description',
        'client_name',
        'project_date',
        'cover_image',
        'is_featured',
        'status',
        'published_at',
        'sort_order',
        'meta_title',
        'meta_description',
    ];

    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class, 'service_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(PortfolioImage::class);
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }
}
