<?php

namespace App\Http\Controllers;
use App\Models\dossier;
use App\Models\patient;
use Illuminate\Http\Request;

class patientlist extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view("admin.patinetlist",['patients'=>patient::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $patient=patient::where('id',$id)->first();
       
        return view("admin.editpatient",['patient'=>$patient]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $patient=patient::where('id',$id)->first();
    $patient->email=$request->email;
    $patient->whatsapp=$request->whatsapp;
    $patient->save();
    return redirect()->route('patientlist.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patient=patient::where('id',$id)->first();
        $patientid=$patient->patientid;
        $dossier=dossier::where('patientid',$patientid)->get();
        
        foreach ($dossier as $dossie) {
            $dossie->delete();
        }
      
        $patient->delete();
    }
}
