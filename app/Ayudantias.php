<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayudantias extends Model
{
      protected $table = 'ayudantias';
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
