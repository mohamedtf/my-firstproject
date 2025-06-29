<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use Illuminate\Http\Request;

class ClientController extends Controller
{
     public function create(){
        return view('create');
    }

public function store(Request $request){
    etudiant::create([
'clientname'=>$request->clientname,
'clientnumber'=>$request->clientnumber,
'studentname'=>$request->studentname,
'studentlevel'=>$request->studentlevel


    ]);
    return back();

}
 public function list(){
        $posts=etudiant::paginate(5);
        return view('list')->with('posts', $posts);
    }



    public function edit( etudiant $id){
        return view('edit',compact('id'));


    }
    public function update(Request $request, etudiant $id){
        $id->update([
       'clientname'=>$request->clientname,
       'clientnumber'=>$request->clientnumber,
        'studentname'=>$request->studentname,
        'studentlevel'=>$request->studentlevel

        ]);
        return redirect('list');
    }

public function destroy(etudiant $id){
    $id->delete();
    return back(

    );
}
}
