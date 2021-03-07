<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
    use HasFactory;

// Accesor para mostrar el formato de la fecha tal y como lo entendemos

    public function getBbdateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function getPhotoAttribute($value){

        return substr($value,7);
    }

}