<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Manager extends Model
{
    protected $fillable = ['warehouse_id', 'mngr_name'];

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }
}