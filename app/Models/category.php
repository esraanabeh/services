<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;


    protected $table='categories';
    protected $fillable = [
        'namear',
        'nameen',
        
        
        'image',
        
    ];


    public static function Categories(){
        $getCategories = Category:: with('Subcats')->get();
        $getCategories = json_decode(json_encode($getCategories),true);
       return $getCategories;


    }





    public function Subcats()
    {
        return $this->hasMany(Subcat::class);
    }
}
