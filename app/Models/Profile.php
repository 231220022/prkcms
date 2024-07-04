<?php

namespace App\Models;
use App\Models\History;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
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
        'awal',
        'akhir',
        'jenis',
        'jabatan',
        'nm_ins',
        'almt_ins',
        'deskripsi',
    ];
}
