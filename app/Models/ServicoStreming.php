<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicoStreming extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'servico_streming';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
    */
    protected $guarded = [];

    public function espectadorRelationship()
    {
        return $this->belongsToMany(Espectador::class, 'espectador_has_servico_streming', 'espectador_id', 'servico_streming_id');
    }

    public function serieRelationship()
    {
        return $this->belongsToMany(Serie::class, 'servico_streming_has_serie', 'serie_id', 'servico_streming_id');
    }
}
