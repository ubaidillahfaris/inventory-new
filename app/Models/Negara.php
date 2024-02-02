<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];

    public function provinsi(){
        return $this->hasMany(Provinsi::class,'negara_id','id');
    }
    
}
