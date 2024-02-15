<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany ;


class categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat',
        'icon',
    ];
    public function projects(): belongsToMany
    {
        return $this->belongsToMany(project::class);
    }
}
