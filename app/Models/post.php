<?php

namespace App\Models;
use App\Http\UserController;
use App\Http\AdminController;
use App\Models\designation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'designations';

    // public function getalldata(){
    //     return $this->hasone('App\Models\designation');
    //     //return $this->hasMany(std_brg_course::class);
    // }
}
