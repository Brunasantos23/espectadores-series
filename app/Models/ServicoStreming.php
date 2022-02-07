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
}
