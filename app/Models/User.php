<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia;

    use SoftDeletes;

    protected $fillable = [
        "admin",
        'contact',
        "point",
        'name',
        'password',
        "verified_at",

        "social_id",
        "social_platform",

        "agree_ad",

        "recommend_contact",

        "birth",

        "account",
        "bank",
        "owner",

        "marriage",
        "men",
        "location",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ["img"];

    public function registerMediaCollections():void
    {
        $this->addMediaCollection('img')->singleFile();
    }

    public function getImgAttribute()
    {
        if($this->hasMedia('img')) {
            $media = $this->getMedia('img')[0];

            return [
                "name" => $media->file_name,
                "url" => $media->getFullUrl()
            ];
        }

        return null;
    }

    public function qnas()
    {
        return $this->hasMany(Qna::class);
    }

    public function surveys()
    {
        return $this->belongsToMany(Survey::class)->withPivot(["pass", "finished"])->withTimestamps();
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
