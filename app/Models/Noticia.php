<?php

namespace weborii\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table='noticia';
    protected $primaryKey = 'idNoticia';
    protected $fillable = ['tituloNoticia','descripcionNoticia','fechaPublicacion','imagen','video'];
    protected $guarded = ['idNoticia'];

}
