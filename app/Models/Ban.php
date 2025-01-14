<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Ban extends Model
{
    use HasFactory;

    protected $table = 'bans';

    protected $fillable = [
        'bannable',
        'created_by',
        'comment',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
        'expired_at' => 'datetime:Y-m-d H:00',
    ];

 
    public const COMMENTS = [
        'terms_of_service' => 'Violates openroast Terms of Service',
        'Child Sexual Abuse Material' => 'Child Sexual Abuse Material (CSAM)',
        'spam' => 'Report Spam',
        'abuse' => 'Report Abuse',
        
    ];

    

    public function bannable(): MorphTo
    {
        return $this->morphTo();
    }

    public function createdBy(): MorphTo
    {
        return $this->morphTo('created_by');
    }
}
