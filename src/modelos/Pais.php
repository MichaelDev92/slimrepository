<?php
namespace Api\Modelos;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'paises';

    /**
     * Este atributo permite que se trabajae en la tabla created_at y updated_at
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombre',
        'estado'
        
    ];
}