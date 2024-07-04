<?php

namespace App\Models;
use App\Models\History;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    
    protected static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            History::createHistory($model, 'created');
        });

        static::updated(function ($model) {
            History::createHistory($model, 'updated');
        });

        static::deleted(function ($model) {
            History::createHistory($model, 'deleted');
        });
    }
    use HasFactory;

    protected $fillable = [
        'salam',
        'konten',
        'active',
        'image_path',
    ];
}

