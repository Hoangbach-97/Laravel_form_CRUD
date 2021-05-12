<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RestarantController extends Controller
{
    public function index(){
        return view('home');
    }
    public function list(){
       $data =  User::all();
       return view('list', ['lol'=>$data]);
     
    }

    public function add(Request $request){
        $data = new User();
        $data->name =$request->name;
        $data->email=$request->email;
        $data->address=$request->address;
       $result=  $data->save();
       $request->session()->flash('tentrangthai', 'Nội dung cần hiển thị ở đây');
       return $result?(redirect('list')):(redirect('add'));
    }

    public function delete(Request $request, $id){
      
        // return $id;
        // $data = User::all();
       $request->session()->flash('tentrangthaixoa', "Nội dung xóa  hiển thị đây");
       User::findOrFail($id)->delete();
       return redirect('list');
    }

    public function edit($id){
     $result =   User::findOrFail($id);
        return view('edit', ['cac'=>$result]);
    }


    public function saveedit(Request $request, $id){
        // $data = new User();
     $data =  User::findOrFail($id);
     $data->name =$request->name;
     $data->email=$request->email;
     $data->address=$request->address;
    $result=  $data->save();
    $request->session()->flash('tentrangthaiedit', 'Nội dung update cần hiển thị ở đây');
    return redirect('list');
 // return "ok";
 }

    }
