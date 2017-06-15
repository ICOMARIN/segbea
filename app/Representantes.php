<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representantes extends Model
{
    protected $table = 'representantes';
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
