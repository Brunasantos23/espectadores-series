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


    public function getEspectadorAttribute(){
        return $this->espectadorRelationship;

    }

    public function getSerieAttribute(){
        return $this->serieRelationship;

    }

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
    */
    protected $guarded = [];

    public function espectadorRelationship()
    {
        return $this->belongsToMany(Espectador::class, 'espectador_has_servico_streaming', 'servico_streaming_id','espectador_id');
    }

    public function serieRelationship()
    {
        return $this->belongsToMany(Serie::class, 'series_has_servico_streaming','servico_streaming_id', 'series_id');
    }
}
