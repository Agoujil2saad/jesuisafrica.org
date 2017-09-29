<?php

namespace App\Http\Controllers;

use App\Jobs\ChangeLocale;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
protected $active_page;
public function __construct()
{
	$active_page='/';
}

	public function index()
	{
		$active_page='/';
		return view('welcome',compact('active_page'));
	}
		public function contact()
	{
		$active_page='/';
		return view('contact',compact('active_page'));
	}
		public function photos()
	{
		$active_page='/photos';
		return view('photos',compact('active_page'));
	}
		public function qui_sommes_nous()
	{
		$active_page='/';
		return view('qui_sommes_nous',compact('active_page'));
	}

	public function espace_presse()
	{
		$active_page='/espace_presse';
		return view('espace_presse',compact('active_page'));
	}

	public function tv_videos()
	{
		return view('presse_audiovisuelle');
	}


	public function language( $lang,
		ChangeLocale $changeLocale)
	{		
		$lang = in_array($lang, config('app.languages')) ? $lang : config('app.fallback_locale');
		$changeLocale->lang = $lang;
		$this->dispatch($changeLocale);
		return redirect()->back();
	}



}
