<?php

namespace weborii\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table='pais';
    protected $primaryKey = 'idPais';
    protected $fillable = ['nombrePais'];
    protected $guarded = ['idPais'];
}
