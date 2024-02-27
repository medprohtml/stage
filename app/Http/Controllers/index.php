<?php

namespace App\Http\Controllers;
use App\Models\dossier;
use App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\PatientEmail;
use Illuminate\Support\Facades\Validator;

class index extends Controller
{
 public function index(){
    if(session('id')){
    $patient=patient::where('patientid',session('id'))->first();
    $dossier=dossier::where('patientid',session('id'))->get();
    return view('patient.index',['patient'=>$patient,'doss'=>$dossier]);}
    else{
        return redirect()->route('loginshow');
    }
 }

 public function addmail(){
    $patient=patient::where('patientid',session('id'))->first();
    return view('patient.mail',['patient'=>$patient]);
     
 }
 public function store(Request $request ){
   $validator = Validator::make($request->all(), [
      'email' => 'required|email',
  ], [
      'email.required' => 'يرجى إدخال عنوان البريد الإلكتروني',
      'email.email' => 'يرجى إدخال عنوان بريد إلكتروني صحيح',
  ]);
  if ($validator->fails()) {
   return redirect()->back()->withErrors($validator)->withInput();
}
    $patient=patient::find(session('id'));
   $patient->email=$request->email;
   $patient->save();
   return redirect()->route('addmail')->with('msj2','تمت اضافة  البريد الالكتلروني بنجاح') ;   
 }
 public function addwhatsapp(){
   
      $patient=patient::where('patientid',session('id'))->first();
      return view('patient.whatsap',['patient'=>$patient]);
      
 }
 public function whatsappstore(Request $request ){
   $validator = Validator::make($request->all(), [
      'whatsapp' => 'required|email',
  ], [
      'whatsapp.required' => 'يرجى إدخال واتساب ',
    
  ]);
  if ($validator->fails()) {
   return redirect()->back()->withErrors($validator)->withInput();
}
    $patient=patient::find(session('id'));
   $patient->whatsapp=$request->whatsapp;
   $patient->save();
   return redirect()->route('addwhatsapp')->with('msj3','تمت اضافة الواتساب بنجاح') ;   
 }
 

}
