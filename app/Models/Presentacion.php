<?php

namespace weborii\Models;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{    
    protected $table='presentacion';
    protected $primaryKey = 'idPresentacion';
    protected $fillable = ['director','correo','telefono','ubicacion','mision','vision'];
    protected $guarded = ['idPresentacion'];
}
