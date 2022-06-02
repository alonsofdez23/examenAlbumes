<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    protected $table = 'temas';

    protected $casts = [
        'duracion' => 'interval',
    ];

    protected $fillable = [
        'titulo',
        'anyo',
        'duracion',
    ];

    /**
     * The albumes that belong to the Tema
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function albumes()
    {
        return $this->belongsToMany(Album::class);
    }

    /**
     * The artistas that belong to the Tema
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function artistas()
    {
        return $this->belongsToMany(Artista::class);
    }
}
