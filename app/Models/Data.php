<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table='data';
    protected $fillable = [
        'name',
        'companyname',
       'email',
        'phone',
        
        
    ];


    public static function data(){
        $getdata = Data:: with('services')->get();
        $getdata = json_decode(json_encode($getdata),true);
       return $getdata;


    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }


}
