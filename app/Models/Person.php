<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = [ 'list'];

    public static $rules = array(
        'list' => 'required|max:20',
       
    );
  
    
   
   
  
   

}
