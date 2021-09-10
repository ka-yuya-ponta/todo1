<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $content=User::where('id',1)->first();
            if (empty($content->color)){
                $content->color='darkblue';
        }
        return view('main'.['content'=>$content]);
    }
      public function change(Request $request){
            $form=$request->color;
            User::find($request->id)->update( $form); 
            return redirect('/');
              
    }
}