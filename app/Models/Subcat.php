<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcat extends Model
{
    use HasFactory;

    protected $table = "subcats";

    protected $fillable = [
        'namear',
        'nameen',
        'category_id',
        'image',
        
    ];

    public function category()
    {
        return $this->belongTo(Category::class);
       
    }

    public function Services()
    {
        return $this->hasMany(Service::class);
    }


    public static function Subcats(){
        $getSubcats = Subcat:: with('services')->get();
        $getSubcats = json_decode(json_encode($getSubcats),true);
       return $getSubcats;


    }
    
}
