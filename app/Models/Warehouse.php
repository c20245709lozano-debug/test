<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Warehouse extends Model
{
    protected $fillable = ['supplier_id', 'location'];

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function manager(): HasOne
    {
        return $this->hasOne(Manager::class);
    }
}