<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espectador extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'espectadores';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
    */
    protected $guarded = [];


    /**
     * The roles that belong to the user.
     */
    public function servicoRelationship()
    {
        return $this->belongsToMany(ServicoStreming::class, 'espectador_has_servico_streming', 'servico_streming_id', 'espectador_id');
    }

    public function serieRelationship()
    {
        return $this->belongsToMany(Serie::class, 'espectador_has_serie', 'serie_id', 'espectador_id');
    }

}
