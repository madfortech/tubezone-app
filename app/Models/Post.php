<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,Sluggable;

    protected $fillable = [
         'title',
         'slug',
         'description',
         'visibility',
         'restrictions',
         'user_id',
         'views',
    ];

    protected $dates = [
        'created_at',
        'created_at',    
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
 
}
