<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $contents=User::all();
        foreach($contents as $content){  
            if (empty($content->color)){
                $content->color='darkblue';
            }
        }
        return view('main'.['contents'=>$contents]);
    }
      public function change(Request $request){
            $form=$request->color;
            User::find($request->id)->update( $form); 
            return redirect('/');
              
    }
}