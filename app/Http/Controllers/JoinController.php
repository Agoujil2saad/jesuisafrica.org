<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class JoinController extends Controller
{
    public function create()
    {
    	return view('join_us');
    }

    public function join_us(Request $request)
	{
		$this->validate($request, [
			"nom"				=>'required',
			"email"				=>'required',
			"telephone"			=>'required',
			"adresse"			=>'required',
			"pays"				=>'required',
		]);

		$data = [
			'nom' 			=> request('nom'),
			'email' 		=> request('email'),
			'telephone' 	=> request('telephone'),
			'adresse' 		=> request('adresse'),
			'pays' 			=> request('pays'),
		];

		Mail::send('mails.join_us', $data, function($message) use ($data){
                $message->to("assoc.cle.de.la.paix@gmail.com");
                $message->subject('Formulaire de Rejoindre l\'association :');
            });

		return redirect('/join_us');
	}

}
