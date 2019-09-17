<?php

namespace weborii\Models;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $table='convocatoria';
    protected $primaryKey = 'idConvocatoria';
    protected $fillable = ['nombreConvocatoria','oferenteConvocatoria','fechaCierre','vigenciaConvocatoria','informacion'];
    protected $guarded = ['idConvocatoria'];
}