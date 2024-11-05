<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categori;


class Todo extends Model
{
    protected $table="todo";
    protected $primaryKey="id";
    protected $fillable=['name','description','status','images','categori_id'];

    public function categori(){
        return $this->belongsTo(Categori::class);
    }
}
