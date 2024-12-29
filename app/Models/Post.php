<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cog\Contracts\Ban\Bannable as BannableInterface;
use Cog\Laravel\Ban\Traits\Bannable;

class Post extends Model implements HasMedia, BannableInterface
{
    use HasFactory,InteractsWithMedia,Sluggable,Bannable;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'audience',
        'restrictions',
        'user_id',
        'views',
    ];

    protected $dates = [
        'created_at',
        'updated_at',    
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
 
    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued()
            ->performOnCollections('videos');
          
    
        $this
            ->addMediaConversion('videos')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();

    }

    public function incrementReadCount() 
    {
        $this->views++;
        return $this->save();
    }
    
    public function trackIpAddress()
    {
        $ipAddress = request()->ip();
        // Ab aap IP address ko track kar sakte hain
        // Aap IP address ko session ya cache mein store kar sakte hain
        session()->put('ip_address', $ipAddress);
    }

    public function scopeOnlyBanned($query)
    {
        return $query->whereHas('bans');
    }

    public function bans()
    {
        return $this->morphMany(Ban::class, 'bannable');
    }
}
