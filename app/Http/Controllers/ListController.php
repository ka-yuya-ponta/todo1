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
    public function add(ClientRequest $request){
      if($request->has('list')){
          alert('登録完了');
        }
          else{
              alert('リストが入力されていません');
          }
          
        Person::create([
            'list'=>$request->list
        ]);
        return redirect('/');
    }
    public function delete(Request $request){
        Person::find($request->id)->delete();  
        return redirect('/');
    }
        
    public function update(ClientRequest $request){
        
             $form=$request->all();
             Person::find($request->id)->update( $form); 
            return redirect('/');
    }
  
 }

   
    