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
     * Get the serie's .
     *
     * @return
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'created_at',
        'updated_at',
        'serieRelationship',
        'servicoRelationship',
        'pivot',

    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */

    protected $appends = [
        'serie',
        

    ];

    public function getSerieAttribute(){
        return $this->serieRelationship;

    }

    /**
     * Get the servico's .
     *
     * @return
     */
    public function getServicoAttribute(){
        return $this->servicoRelationship;
    }

     /**
     * Get the servico that owns the servico.
     *
     * @return Servico
     */

    public function servicoRelationship()
    {
        return $this->belongsToMany(ServicoStreming::class, 'espectador_has_servico_streaming', 'espectador_id','servico_streaming_id');
    }

    /**
     * Get the serie that owns the serie.
     *
     * @return Serie
     */

    public function serieRelationship()
    {
        return $this->belongsToMany(Serie::class, 'espectador_has_series', 'espectador_id', 'serie_id');
    }



}
