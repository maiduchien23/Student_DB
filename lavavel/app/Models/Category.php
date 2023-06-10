<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model
{
    use HasFactory;
    public $fillable =[
        'id',
        'category_name',
        'category_desc',
    ];
    public function products(){
        return $this->hasMany(Student::class,'category_id','id');
    }
}
