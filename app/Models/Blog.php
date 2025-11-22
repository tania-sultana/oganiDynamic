<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    protected $guarded = ['id'];

    public function firstMedia()
    {
        return $this->belongsTo(Media::class, 'first_thumbnail_id');
    }

    public function firstThumbnail(): Attribute
    {
        $url = asset('assets/images/default.jpg');

        if ($this->firstMedia && Storage::exists($this->firstMedia->src)) {
            $url = Storage::url($this->firstMedia->src);
        }

        return Attribute::make(
            get: fn() => $url
        );
    }


    public function secondMedia()
    {
        return $this->belongsTo(Media::class, 'second_thumbnail_id');
    }

    public function secondThumbnail(): Attribute
    {
        $url = asset('assets/images/default.jpg');
        if ($this->secondMedia && Storage::exists($this->secondMedia->src)) {
            $url = Storage::url($this->secondMedia->src);
        }
        return Attribute::make(
            get: fn() => $url
        );
    }

    public function sicialLink(){
        return $this->hasOne(BlogSocialLink::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            Cache::forget('blog');
        });
        static::updating(function ($model) {
            Cache::forget('blog');
        });
        static::deleting(function ($model) {
            Cache::forget('blog');
        });
    }





}
