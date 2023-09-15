<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeatureSku extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sku_id',
        'feature_id',
        'value'
    ];

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class);
    }

    public function skus(): BelongsToMany
    {
        return $this->belongsToMany(Sku::class);
    }
}