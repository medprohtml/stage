<?php

namespace App\Http\Controllers;
use App\Models\dossier;
use App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Session;
class loginpatient extends Controller

{


   public function loginshow(){
    return view("patient.login");

} 
    public function login(Request $request){
      $validator = Validator::make($request->all(), [
        'name' => 'required',
        'password'=>'required',
    ], [
        'name.required' => 'يرجى إدخال الكود ',
        'password.required' => 'يرجى إدخال النسب  ',
    ]);
    if ($validator->fails()) {
     return redirect()->back()->withErrors($validator)->withInput();
  }
        $password = $request->password;
        $name= $request->name;
        $patient=patient::where('patientid',$password)->first();
        if($patient){
          if($name==$patient->nom){
            $request->session()->regenerate();
          
            $patient = patient::where('patientid', $password)->first();
            $dossier=dossier::where('patientid',$password)->get();
            $id = $patient->patientid;
         
            session(['id'=>$id]);
        
        
          
             return redirect()->route('index');
          }
          else{
            return redirect()->route('loginshow');
          }
          
        }
        else{
            return redirect()->route('loginshow');
        }
}
 public function logout(){
  session::flush();

  return redirect()->route('loginshow');
 }
}
