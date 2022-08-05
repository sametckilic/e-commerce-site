<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartstable extends Model
{
    use HasFactory;
    protected $table = "cartstable";

    public function products()
    {

        return $this->belongsTo(products::class,'productID','id');
    }
}
