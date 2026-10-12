<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    protected $fillable = ['publisher_id', 'name'];

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    public function profile(): HasOne
    {
        return $this->hasOne(AuthorProfile::class);
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}