<?php

namespace weborii\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table='convenio';
    protected $primaryKey = 'idConvenio';
    protected $fillable = ['codigoConvenio','tituloConvenio','objetoConvenio','vigenciaConvenio','fechaExpedicion','fechaTerminacion'];
    protected $guarded = ['idConvenio'];
}
