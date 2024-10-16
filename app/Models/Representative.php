<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    use hasFactory;

    protected $table = 'representatives';
    protected $fillable = [
        'name',
        'cpf',
        'phone',
        'city_id'
    ];

}
