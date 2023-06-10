<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $fillable =[
        'category_id',
        'student_name',
        'student_desc',
        'student_qty'
    ];
    public function categories(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
