<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Support\Facades\Auth;

class Taskcontroller extends Controller
{
    public function index(){
        $this->middleware('auth');
      
        $values = Task::get();

        $id = Auth::id();
      
        $user_id = Auth::id();
        return view('index',[
                'values' => $values,
                'user_id'=>$user_id,   
                'id' =>$id
        ]);
    }
    public function show($id){
    
        $values = Task::find($id);
    
        return view('show',[
            'values' => $values
        ]);
    }
    public function edit(){
    

        return view('edit');
    }

    public function post(Request $request){

        $values = $request->all();
     
        $user_id = Auth::id();
        $user_collection =['user_id' => $user_id];

        $values = $values + $user_collection;

        Task::create($values);
        
        
        return redirect('/index');
        
    }
    public function update_page($id){

        $task = Task::findOrFail($id);
      

        return view('update_page', ['task' => $task]);

    }
    public function update(Request $post,$id){

        $data = Task::find($id);
        $value = $post->all();
        unset($value['_token']);
        
        $data->fill($value)->save();

        return redirect('/index');

    }
    public function destoroy_page($id){
    

        $data = Task::find($id);
        $data->delete();
        
        return redirect('/index');

    }
    public function test(){
        $values = Task::find(1);
        return view('test',[
            'values' => $values
        ]);
    }
    
    
}
