<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable =[
        'name',
        'surname',
        'birth_year'
    ];

    public function tasks(){
        return $this -> hasMany(Task::class);
    }
}
