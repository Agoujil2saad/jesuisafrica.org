<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\News;

class NewsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function create()
    {
    	return view('create_news');
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
        	$destinationPath = public_path('/images/news');
        	$name = $photo->getClientOriginalName();
        	$photo->move($destinationPath, $name);

        	News::create([
    		'photo' 		=> $name,
    		'lien' 			=> request('lien'),
    		'date' 			=> request('date'),
    		'description' 	=> request('description'),
    		]);
			return redirect()->route('news.create')->with('status', 'L\'actualité est créée !!');
        }

		return redirect()->route('news.create')->with('status', 'L\'actualité n\'est pas créée !!');
    }

    public function destroy($id)
    {
    	$news = News::findOrFail($id);
    	$news->delete();
    	return redirect('/');
    }
}
