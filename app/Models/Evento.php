<?php

namespace weborii\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table='evento';
    protected $primaryKey = 'idEvento';
    protected $fillable = ['tituloEvento','lugarEvento','fechaEvento','horaEvento','descripcion','informacionP','informacionI','miniatura'];
    protected $guarded = ['idEvento'];
}
