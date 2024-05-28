<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'la_une',
        'image',
    ];
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

}
