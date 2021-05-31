<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $table = "services";

    protected $fillable = [
        'namear',
        'nameen',
        'count',
        'subcat_id',
        
        
    ];

    public function Subcat()
    {
        return $this->belongTo(Subcat::class);
       
    }

    public function data()
    {
        return $this->belongTo(Data::class);
       
    }

}
