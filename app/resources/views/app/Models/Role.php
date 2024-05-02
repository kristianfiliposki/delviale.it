<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Client;

class Role extends Model
{
    use HasFactory;

    public function client(){
        return $this->hasMany(Client::class);
    }

    public $fillable=[
        'name',
    ];

       
}
