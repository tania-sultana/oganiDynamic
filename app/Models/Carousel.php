<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Carousel extends Model
{
     protected $table = 'carousel';
       protected $fillable = [
        'header',
        'media_id',
    ];


    public function media()
    {
        return $this->belongsTo(Media::class);
    }
    public function thumbnail(): Attribute
    {
        $url = asset('assets/images/default.jpg');
        if  ($this->media && Storage::exists($this->media->src)) {
            $url = Storage::url($this->media->src);
        }

        return Attribute::make(
            get: fn () => $url
        );
    }
    protected static function booted()
    {
        static::creating(function($model){
            Cache::forget('hero_section');
        });
        static::updating(function($model){
            Cache::forget('hero_section');
        });
        static::deleting(function($model){
            Cache::forget('hero_section');
        });
    }
}
