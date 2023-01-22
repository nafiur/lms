<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    // protected $table = 'course';
    public function seminar(){
        return $this->hasMany(Seminar::class);
    }
}
