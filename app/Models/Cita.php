<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $fecha
 * @property $hora
 * @property $estado
 * @property $id_veterinario
 * @property $id_cliente
 * @property $id_agenda
 * @property $observacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Agenda $agenda
 * @property Cliente $cliente
 * @property Veterinario $veterinario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'hora' => 'required',
		'estado' => 'required',
		'id_veterinario' => 'required',
		'id_cliente' => 'required',
		'id_agenda' => 'required',
		'observacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','hora','estado','id_veterinario','id_cliente','id_agenda','observacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function agenda()
    {
        return $this->hasOne('App\Models\Agenda', 'id', 'id_agenda');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function veterinario()
    {
        return $this->hasOne('App\Models\Veterinario', 'id', 'id_veterinario');
    }
    

}
