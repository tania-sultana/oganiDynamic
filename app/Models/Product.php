<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $guarded = ['id'];
//     protected $table = 'products';
//    protected $fillable = [
//        'name',
//        'description',
//        'price',
//        'discount_price',
//        'short_description',
//        'additional_information',
//        'weight',
//        'media_id'
//    ];

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function thumbnail(): Attribute
    {
        $url = asset('assets/images/default.jpg');
        if ($this->media && Storage::exists($this->media->src)) {
            $url = Storage::url($this->media->src);
        }
        return Attribute::make(
            get: fn() => $url
        );
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            Cache::forget('product');
        });
        static::updating(function ($model) {
            Cache::forget('product');
        });
        static::deleting(function ($model) {
            Cache::forget('product');
        });
    }
}
