<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Characteristic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'meta_data',
        'characteristic_category_id',
    ];

    protected $casts = [
        'meta_data' => 'array',
    ];

    public function characteristicCategory(): BelongsTo
    {
        return $this->belongsTo(CharacteristicCategory::class);
    }
}
