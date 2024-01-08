<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = ['exercise', 'muscle', 'datum', 'set', 'weight_min', 'weight_max', 'by_user_id'];

    public function owner(): BelongsTo {
        return $this->belongsTo(User::class, 'by_user_id');
    }
}
