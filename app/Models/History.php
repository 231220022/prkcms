<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class History extends Model
{
    use HasFactory;
    protected $fillable = ['model_type', 'model_id', 'action', 'user_id'];

    public static function createHistory($model, $action)
    {
        self::create([
            'model_type' => get_class($model),
            'model_id' => $model->id,
            'action' => $action,
            'user_id' => Auth::id(), // Using Auth facade
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
