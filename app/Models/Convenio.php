<?php

namespace weborii\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table='convenio';
    protected $primaryKey = 'idConvenio';
    protected $fillable = ['codigoConvenio','tituloConvenio','objetoConvenio','vigenciaConvenio','fechaExpedicion','fechaTerminacion','idPais'];
    protected $guarded = ['idConvenio'];

    public function pais(){ //$convenio->pais->nombre
        return $this->belongsTo(Pais::class); //Pertenece a un Pais.
    }
}
