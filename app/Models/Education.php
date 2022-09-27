<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = ['school_name', 'year_finish', 'higher_education', 'field_of_study', 'graduation_start_date', 'graduation_end_date'];
    
    public function user() {
        return $this->belongsTo('User'::class,'user_id');
      }
}

