<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Youtubevideos;

class YoutubevideosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth','bugfree');
    }

	public function index()
	{
		$videos = YoutubeVideos::all();
		return view('videos.index_videos', compact('videos'));
	}

    public function create()
    {
    	return view('videos.create_videos');
    }

    public function edit($id)
    {
        $video = Youtubevideos::findOrFail($id);
        return view('videos.edit_videos' , compact('video'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
			"value"		=>'required',
			"titre"		=>'required',
		]);

        $video = Youtubevideos::findOrFail($id);

        $video->value = request('value');
        $video->titre = request('titre');
        $video->save();

		return redirect()->route('videos.index')->with('status', 'La vidéo est modifiée.');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
			"value"		=>'required',
			"titre"		=>'required',
		]);

        Youtubevideos::create([
	    	'value' 	=> request('value'),
	    	'titre' 	=> request('titre'),
    	]);

		return redirect()->route('videos.index')->with('status', 'La vidéo est ajoutée.');
    }

    public function destroy($id)
    {
    	$videos = Youtubevideos::findOrFail($id);
    	$videos->delete();

    	return redirect()->route('videos.index')->with('status', 'La vidéo est supprimée.');
    }
}
