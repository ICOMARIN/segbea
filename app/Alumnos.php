<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    
	protected $table = 'alumnos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

     /**
     * Get the representantes for the blog post.
     */
    public function representantes()
    {
        return $this->hasMany('App\Representantes');
    }
     /**
     * Get the representantes for the blog post.
     */
    public function notas()
    {
        return $this->hasMany('App\Notas');
    }

     /**
     * Get the representantes for the blog post.
     */
    public function ayudantias()
    {
        return $this->hasMany('App\Ayudantias','alumnos_id');
    }
    
    
}
