<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class categorie_project extends Model
{
    protected $table="categorie_project";
    use HasFactory;
    protected $fillable = [
        'categorie_id',
        'project_id'
    ];
}
