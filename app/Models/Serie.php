<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'series';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
    */
    protected $guarded = [];

    public function statusRelationship(){
        return $this->hasMany(Status::class, 'status_id', 'id');
    }

    public function espectadorRelationship()
    {
        return $this->belongsToMany(Espectador::class, 'espectador_has_servico_streming', 'espectador_id', 'serie_id');
    }

    public function servicoRelationship()
    {
        return $this->belongsToMany(ServicoStreming::class, 'servico_streming_has_serie', 'servico_streming_id', 'serie_id');
    }
}
