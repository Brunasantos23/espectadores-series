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


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'created_at',
        'updated_at',
        'pivot',

    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */

    protected $appends = [


    ];

    /**
     * Get the espectador's .
     *
     * @return
     */

    public function getEspectadorAttribute(){
        return $this->espectadorRelationship;

    }

    /**
     * Get the serie's .
     *
     * @return
     */

    public function getSerieAttribute(){
        return $this->serieRelationship;

    }



    /**
     * Get the espectador that owns the espectador.
     *
     * @return Espectador
     */
    public function espectadorRelationship()
    {
        return $this->belongsToMany(Espectador::class, 'espectador_has_servico_streaming', 'servico_streaming_id','espectador_id');
    }

    /**
     * Get the serie that owns the serie.
     *
     * @return Serie
     */

    public function serieRelationship()
    {
        return $this->belongsToMany(Serie::class, 'series_has_servico_streaming','servico_streaming_id', 'series_id');
    }
}
