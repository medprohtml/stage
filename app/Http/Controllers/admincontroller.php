<?php

namespace App\Http\Controllers;
use App\Models\dossier;
use App\Models\patient;
use Illuminate\Http\Request;

class admincontroller extends Controller


{

    public function ajouterpatientview(){
         return view("admin.ajouterpatient");

    }

  public function ajouterpatient(Request $request){
     $patient= patient::firstOrCreate(['patientid'=>$request->idp],[
     'nom'=>$request->name,'prenom'=>$request->prenom,'email'=>'default email','whatsapp'=>'default whatsapp'
     ]);

     $dossier=new dossier();
     $result=$request->result->store('','public');
     $dossier->dossierid=$request->idd;
     $dossier->patientid=$request->idp;
     $dossier->Resultas=$result;
     $dossier->save();
 
  }
}
