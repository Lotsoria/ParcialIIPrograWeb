<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dosi
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property AplicacionVacuna[] $aplicacionVacunas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dosi extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aplicacionVacunas()
    {
        return $this->hasMany('App\Models\AplicacionVacuna', 'dosis_id', 'id');
    }
    

}
