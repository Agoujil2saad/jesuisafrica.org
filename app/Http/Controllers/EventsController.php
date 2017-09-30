<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class EventsController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

    public function create()
    {
    	return view('create_events');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
			'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			"lien"				=>'required',
			"date"				=>'required',
			"description"		=>'required',
		]);

		if($request->hasFile('photo'))
		{
        	$photo = $request->file('photo');
        	$destinationPath = public_path('/images/events');
        	$name = $photo->getClientOriginalName();
        	$photo->move($destinationPath, $name);

        	Events::create([
    		'photo' 		=> $name,
    		'lien' 			=> request('lien'),
    		'date' 			=> request('date'),
    		'description' 	=> request('description'),
    		]);
    		return redirect()->route('events.create')->with('status', 'L\'evenement est créé');
        }

		return redirect()->route('events.create')->with('status', 'L\'evenement n\'est pas créé !!');
    }

    public function destroy($id)
    {
    	$events = Events::findOrFail($id);
    	$events->delete();
    	return redirect('/');
    }
}
