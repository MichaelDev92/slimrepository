<?php
namespace Api\Modelos;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admins';

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
        'tipodocumento',
        'documento',
        'nombres',
        'apellidos',
        'genero',
        'celular',
        'telefonofijo',
        'codigopostal',
        'fechanacimiento',
        'edad',
        'pais',
        'departamento',
        'ciudad',
        'fotoadmin',
        'fotoced1',
        'fotoced2',
        'direccion',
        'correo',
        'jefeinmediato'

        
    ]; 
}