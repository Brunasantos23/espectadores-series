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

    public function getSerieAttribute(){
        return $this->serieRelationship;

    }

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
    */
    protected $guarded = [];

    /**
     * Get the post that owns the comment.
    */

    public function serieRelationship(){

        return $this->hasMany(Serie::class, 'status_id', 'id');
    }
}
