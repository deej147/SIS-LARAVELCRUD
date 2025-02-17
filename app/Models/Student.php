<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory; // Make sure this line exists!

    protected $fillable = ['name', 'email', 'age', 'address', 'grade_level'];
}
