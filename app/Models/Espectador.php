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

    public function getSerieAttribute(){
        return $this->serieRelationship;

    }

    public function getServicoAttribute(){
        return $this->servicoRelationship;
    }

    /**
     * The roles that belong to the user.
     */

    public function servicoRelationship()
    {
        return $this->belongsToMany(ServicoStreming::class, 'espectador_has_servico_streaming', 'espectador_id','servico_streaming_id');
    }

    public function serieRelationship()
    {
        return $this->belongsToMany(Serie::class, 'espectador_has_series', 'espectador_id', 'serie_id');
    }



}
