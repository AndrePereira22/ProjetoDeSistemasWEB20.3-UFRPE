<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = ['schedule', 'date', 'reminder','animal_id','service_id'];


    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }


}
