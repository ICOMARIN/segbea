<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
     protected $table = 'notas';
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * Get the alumno.
     */
    public function alumno()
    {
        return $this->belongsTo('App\Alumnos');
    }
}
