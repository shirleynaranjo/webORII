<?php

namespace weborii\Models;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $table='experiencia';
    protected $primaryKey = 'idExperiencia';
    protected $fillable = ['enlace','descripcion'];
    protected $guarded = ['idExperiencia'];
}
