<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureSuggestion extends Model
{
    use HasFactory;

    protected $table = 'feature_suggestions';

    protected $fillable = [
        'suggested_by',
        'name',
        'description',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'suggested_by', 'id');
    }
}
