<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'status';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',

    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */

    protected $appends = [

    ];


    /**
     * Get the serie's .
     *
     * @return
     */
    public function getSerieAttribute(){
        return $this->serieRelationship;

    }

     /**
      * Get the serie that owns the serie.
      *
      * @return Serie
      */

    public function serieRelationship(){

        return $this->hasMany(Serie::class, 'status_id', 'id');
    }
}
