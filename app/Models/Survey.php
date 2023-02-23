<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Survey extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        "survey_id",
        "point",
        "title",
        "description",
        "max",
        "finished_at",
        "hide",
        "random"
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

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot(["pass", "finished"])->withTimestamps();
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function survey()
    {
        return $this->hasOne(Survey::class);
    }

    public function questions()
    {
        return $this->hasManyThrough(Question::class, Section::class);
    }
}
