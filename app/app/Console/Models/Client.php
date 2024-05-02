<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);   
       }
   

       public $fillable = [
        'name',
        'telefono',
        'punti',
        'img_url',
        'user_id', // Includi user_id in fillable
    ];

}