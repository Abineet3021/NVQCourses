<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable =['name', 'age', 'speciality', 'phone', 'image', 'description', 'hospital_id', 'is_active'];
}
