<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $table='materiales';
    protected $fillable = [
        'estado',
        'nombre',
        'descripcion',
        'stock_minimo',
        'categoria_id',
    ]; 

    public function categoria() {

        return $this->belongsTo(Categoria::class,'categoria_id','id' );
    }

}
