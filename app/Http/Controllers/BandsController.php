<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Band;
class BandsController extends Controller
{
    public function index(){
    	$bands = Band::all();
    	 // dd($bands);
    	 return view('bands.index',compact('bands'));

    }
      public function show(Band $band)
    {
        return view('bands.show', compact('band'));
    }




    public function create(){

    	return view('bands/create');
    }
    public function store(){
    	$bands = Band::create([
    		'name'=>request()->name,
    		'date_formed'=>request()->date_formed
    	]);

    	return redirect('/bands');
    }
    public function delete(Band $id){

        // dd($id->songs);
        $id->songs()->truncate();
    	$id->delete();

    	return redirect('/bands');

    }
    public function edit(Band $band){
        
        return view('/bands/edit',compact('band'));
    }
    public function update(){

        $band = Band::find(request()->id);
        $band->update([
            'name' => request()->name,
            'date_formed' => request()->date_formed
        ]);

        return redirect('/bands');

    }

}
//  //get the song
//         
//         //redirect to index