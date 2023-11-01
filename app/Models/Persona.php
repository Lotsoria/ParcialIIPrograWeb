<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $CUI
 * @property $nombres
 * @property $apellidos
 * @property $created_at
 * @property $updated_at
 *
 * @property AplicacionVacuna[] $aplicacionVacunas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'CUI' => 'required',
		'nombres' => 'required',
		'apellidos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['CUI','nombres','apellidos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aplicacionVacunas()
    {
        return $this->hasMany('App\Models\AplicacionVacuna', 'persona_id', 'id');
    }
    

}
