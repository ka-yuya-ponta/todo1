<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = [ 'list'];

    public static $rules = array(
        'name' => 'required|max:20',
        'age' => 'integer|min:0|max:150',
    );
  
    
   
   
  
   

}
