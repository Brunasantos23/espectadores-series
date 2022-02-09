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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'status_id',
        'created_at',
        'updated_at',
        'statusRelationship',
        'servicoRelationship',
        'pivot',

    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */

    protected $appends = [
        'status',
        'servico',

    ];

    /**
     * Get the status's status.
     *
     * @return string
     */

    public function getStatusAttribute(){
        return $this->statusRelationship->status;

    }

    /**
     * Get the espectator's .
     *
     * @return
     */
    public function getEspectadorAttribute(){
        return $this->espectadorRelationship;

    }

    /**
     * Get the servico_streaming's .
     *
     * @return string
     */
     public function getServicoAttribute(){

        return $this->servicoRelationship;

    }

    /**
     * Set the status's status.
     *
     * @param  int  $value
     * @return void
     */
    public function setStatusAttribute($value){
        if(isset($value)){
            $this->attributes['status_id'] = Status::where('id', $value)->first()->id;
        }

    }

    /**
     * Set the servico's nome.
     *
     * @param  int  $value
     * @return void
     */

    public function setServicoAttribute($value){
        if(isset($value)){
            $this->attributes['servico_streaming_id'] = ServicoStreming::where('id', $value)->first()->id;
        }

    }

    /**
     * Get the status that owns the status.
     *
     * @return Status
     */

    public function statusRelationship(){
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    /**
     * Get the espectator that owns the espectador.
     *
     * @return Espectador
     */
    public function espectadorRelationship()
    {
        return $this->belongsToMany(Espectador::class, 'espectador_has_series', 'serie_id', 'espectador_id');
    }

    /**
     * Get the servico that owns the servico.
     *
     * @return Servico
     */
    public function servicoRelationship()
    {
        return $this->belongsToMany(ServicoStreming::class, 'series_has_servico_streaming', 'series_id', 'servico_streaming_id');
    }
}
