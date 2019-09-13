<?php

namespace weborii\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table='noticia';
    protected $primaryKey = 'idNoticia';
    protected $fillable = ['nombreNoticia','descripcionNoticia','autoresNoticia'];
    protected $guarded = ['idNoticia'];

}
