<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function acceuil()
    {
        return view('admin');
    }
    
    public function index()
    {
        return view('candidat.add');
    }

    public function list_candidat()
    {
        $candidats = Candidat::All();
        return view('candidat.list', compact('candidats'));

    }

    public function list_electeur()
    {
        $electeurs = User::All();
        return view('electeur.list', compact('electeurs'));

    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nom' => ['bail','required'],
            'prenom' => ['bail','required'],
            'email' => ['bail','required','email'],
            'parti' => ['bail','required']
        ]);
        $candidat = new Candidat();
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->email = $request->email;
        $candidat->parti = $request->parti;

        $candidat->save();

        return redirect()->back()->with('success','enrigistrement Reussi !!');
    }

   
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidat = Candidat::findOrFail($id);
        return view('candidat.edit',compact('candidat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => ['bail','required'],
            'prenom' => ['bail','required'],
            'email' => ['bail','required','email'],
            'parti' => ['bail','required']
        ]);
        
        $candidat = Candidat::findOrFail($id);
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->email = $request->email;
        $candidat->parti = $request->parti;

        $candidat->update();

        return redirect()->route('list_candidat')->with('success','modification Reussi !!');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidat = Candidat::find($id) ;
        $electeur = User::find($id) ;
       if ($candidat != null) {
            $candidat->delete();
            return redirect()->back()->with('success','Suppression Reussi !!');
       } 
       else if ($electeur != null){
            $electeur->delete();
            return redirect()->back()->with('success','Suppression Reussi !!');
       }
       
    }
}
