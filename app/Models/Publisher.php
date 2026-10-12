<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publisher extends Model
{
    protected $fillable = ['publisher_name'];

    public function authors(): HasMany
    {
        return $this->hasMany(Author::class);
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}