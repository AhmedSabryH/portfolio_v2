<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany ;

class project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'text',
        'link',
        'type',
        'main_img'
    ];
    public function categorie(): belongsToMany
    {
        return $this->belongsToMany(categorie::class);
    }
}
