<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Todo;

class Categori extends Model
{
    protected $table="categori";
    protected $primaryKey="id";
    protected $fillable=['title'];

    public function todos(){
        return $this->hasMany(Todo::class);
    }
}
