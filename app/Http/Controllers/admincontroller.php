<?php

namespace App\Http\Controllers;
use App\Models\dossier;
use App\Models\patient;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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


  public function addadmin(){
    $users=User::all();
    
    return view("admin.addres",['users'=>$users]);
  }

  public function addresstore(Request $request){
    $admin=new User();
     
    $admin->name=$request->name;
    $admin->email=$request->email;
    $admin->Hasrole=$request->role;
    $admin->password = Hash::make($request->pass);

    $admin->save();
  }
}
