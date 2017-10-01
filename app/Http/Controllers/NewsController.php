<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\News;

class NewsController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth','bugfree');
    }

    public function index()
    {
        $news = News::all();
        return view('news.index_news', compact('news'));
    }

    public function create()
    {
    	return view('news.create_news');
    }

    public function edit($id)
    {
        $new = News::findOrFail($id);
        return view('news.edit_news' , compact('new'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "lien"              =>'required',
            "date"              =>'required',
            "description"       =>'required',
        ]);

        $new = News::findOrFail($id);

        if($request->hasFile('photo'))
        {
            $photo = $request->file('photo');
            $destinationPath = public_path('/images/news');
            $name = $photo->getClientOriginalName();
            $photo->move($destinationPath, $name);

            $new->photo = $name;
            $new->lien = request('lien');
            $new->date = request('date');
            $new->description = request('description');
            $new->save();

            return redirect()->route('news.index')->with('status', 'L\'actualité est modifié');
        }

        $new->lien = request('lien');
        $new->date = request('date');
        $new->description = request('description');
        $new->save();

        return redirect()->route('news.index')->with('status', 'L\'actualité est modifié');
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
			return redirect()->route('news.index')->with('status', 'L\'actualité est créée.');
        }

		return redirect()->route('news.index')->with('status', 'L\'actualité n\'est pas créée.');
    }

    public function destroy($id)
    {
    	$news = News::findOrFail($id);
    	$news->delete();
    	
        return redirect()->route('news.index')->with('status', 'L\'actualité est supprimée.');
    }
}
