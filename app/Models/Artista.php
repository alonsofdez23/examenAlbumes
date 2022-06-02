<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    protected $table = 'artistas';

    /**
     * The temas that belong to the Artista
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function temas()
    {
        return $this->belongsToMany(Tema::class);
    }
}
