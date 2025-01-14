<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['id','user_id','expert_id','rate_value' ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function expert(){
        return $this->belongsTo(Expert::class);
    }
}
