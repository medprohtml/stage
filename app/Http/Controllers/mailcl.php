<?php

namespace App\Http\Controllers;
use App\Models\dossier;
use App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PatientEmail;
class mailcl extends Controller
{
    public function mail(Request $request ){
        $res=$request->res;
        $patient=patient::where('patientid',session('id'))->first();
        $email=$patient->email;
        $request->session()->regenerate();
        session(['res'=>$res]);
        Mail::to($email)->send(new PatientEmail());
        return redirect()->route('index')->with('msj','تم الارسال للبريد الاكتلروني بنجاح');
        
  
    }
}
