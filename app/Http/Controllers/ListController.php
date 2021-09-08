<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    //
    public function index(Request $request){
        $items=Person::all();
        return view('main',['items'=>$items]);
    }
    public function add(Request $request){
      if($request->has('list')){
        $alert = "<script type='text/javascript'>alert('登録完了');</script>";
        echo $alert;
        }
          else{
            $alert = "<script type='text/javascript'>alert('リストが入力されていません');</script>";
            echo $alert;
              
          }
          
        Person::create([
            'list'=>$request->list
        ]);
        return redirect('/');
    }
    public function delete(Request $request){
        $alert = "<script type='text/javascript'>alert('よく頑張った');</script>";
        echo $alert;
        Person::find($request->id)->delete();  
        return redirect('/');
    }
        
    public function update(ClientRequest $request){
        
             $form=$request->all();
             Person::find($request->id)->update( $form); 
            return redirect('/');
    }
  
 }

   
    