<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'phone', 'email', 'address','summary','coursename'];

    public function user() {
        return $this->belongsTo('User'::class);
      }
}
