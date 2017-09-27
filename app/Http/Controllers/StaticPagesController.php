<?php

namespace App\Http\Controllers;

use App\Jobs\ChangeLocale;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{


	public function index()
	{
		return view('welcome');
	}
		public function contact()
	{
		return view('contact');
	}
		public function photos()
	{
		return view('photos');
	}
		public function qui_sommes_nous()
	{
		return view('qui_sommes_nous');
	}
	public function espace_presse()
	{
		return view('espace_presse');
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
