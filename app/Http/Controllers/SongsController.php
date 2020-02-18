<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Band;
use App\Song;
class SongsController extends Controller
{
    

	public function create(Band $band)
	{
        // dd($band);
		return view('songs.create', compact('band'));
	}

	public function store(Band $band)
	{
		$band->songs()->create([
			'title' => request()->title,
			'duration' => request()->duration
		]);
    	return redirect('/bands/'.$band->id);

	}

    public function edit(Song $song)
    {
    	return view('songs.edit', compact('song'));
    }


    public function update()
    {
    	//get the song
    	$song = Song::find(request()->id);
    	//update the song
    	$song->update([
    		//columns => new_value
    		'title' => request()->title,
    		'duration' => request()->duration
    	]);
    	//redirect to index
    	return redirect('/bands/'.$song->band_id);
    }

    public function delete(Song $song)
    {
    	$song->delete();
    	return redirect('/bands/'.$song->band_id);
    }
}
