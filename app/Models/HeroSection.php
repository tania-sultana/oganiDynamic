<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;


class HeroSection extends Model
{
     protected $table = 'hero_section';
       protected $fillable = [
        'header',
        'first_title',
        'second_title',
        'short_description',
        'btn_name',
        'btn_url',
        'media_id',
    ];
    // protected $guarded = ['id'];

    public function media()
    {
        return $this->belongsTo(Media::class);
    }
    public function thumbnail(): Attribute
    {
        $url = asset('assets/imgages/banner.jpg');
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
