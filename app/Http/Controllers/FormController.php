<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormTable;

class FormController extends Controller
{
    public function index(){
        $data = FormTable::all();
        
        return view('form');
    }

    public function submit(Request $request){
        $data = $request->all();
        FormTable::create($data);
        $data = FormTable::all();
        return view('view',compact('data'));

    }
    public function Getform(){
            return view('clickonformbutton');
    }
    public function editdata($id){
        // $data=FormTable::all();
            $data=FormTable::find($id);
            dd($data);
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            // dd($data);
            // foreach ($data as  $value) {
                  
            //     echo $value->name;
                   
            // }
            // die();
            
        return view('edit',compact('data'));
    }
    public function show(Request $request){
        $data = FormTable::all();
        return view('view',compact('data'));
    }
    public function update(Request $request){
            $data=$request->all();
            FormTable::update($data);               
    }
}
