<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investimento extends Model
{
    use HasFactory;

    protected $fillable = ['name','valor','adicional','date','total'];
    
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->total = $model->valor + $model->adicional;
        });        
    }


    public function Historico(){
        return $this->hasMany(Historico::class , 'id_investimento' , 'id');
    }

}
