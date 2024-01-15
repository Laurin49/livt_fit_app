<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    public function scopeMostRecent(Builder $query): Builder
    {
        return $query->orderByDesc('created_at');
    }

    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return $query->when(
            $filters['muscle'] ?? false,
            fn ($query, $value) => $query->where('muscle', $value)
        )->when(
            $filters['datum_von'] ?? false,
            fn ($query, $value) => $query->where('datum', '>=', $value)
        )->when(
            $filters['datum_bis'] ?? false,
            fn ($query, $value) => $query->where('datum', '<=', $value)
        );
    }

}
