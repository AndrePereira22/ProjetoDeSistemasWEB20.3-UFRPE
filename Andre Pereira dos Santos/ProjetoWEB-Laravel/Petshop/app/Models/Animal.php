<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'sex','img', 'breed','species','birth','castration','user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }


}
