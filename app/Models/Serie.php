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

    public function getStatusAttribute(){
        return $this->statusRelationship;

    }

    public function getEspectadorAttribute(){
        return $this->espectadorRelationship;

    }

    public function getServicoAttribute(){
        return $this->servicoRelationship;

    }

    public function setNomeAttribute($value){
        $this->attributes['nome'] = strtoupper($value);

    }


    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
    */
    protected $guarded = [];

    public function statusRelationship(){
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function espectadorRelationship()
    {
        return $this->belongsToMany(Espectador::class, 'espectador_has_series', 'serie_id', 'espectador_id');
    }

    public function servicoRelationship()
    {
        return $this->belongsToMany(ServicoStreming::class, 'series_has_servico_streaming', 'series_id', 'servico_streaming_id');
    }
}
