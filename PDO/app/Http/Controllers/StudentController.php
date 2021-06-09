<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function onSelect(){
        $data=DB::select('SELECT * FROM students');
        return view('ViewStudent',['allData'=>$data]);
    }
    public function onInsert(){
        return view('addStudent');
    }
    public function insertData(Request $request){
       $name= $request->input('name');
       $age= $request->input('age');
       $city= $request->input('city');
       $result=DB::insert('INSERT INTO students (name,age,city) VALUES(?,?,?)',[$name,$age,$city]);
       if($result==true){
           return "Data insert Succesful!";
       }
       else{
           return "Failed to insert data!";
       }
    }
}
