<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function __construct()
    {
        $this->middleware(['auth','bugfree']);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        $this->validate($request, [
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "lien"              =>'required',
        ]);

        if($request->hasFile('photo'))
        {
            $photo = $request->file('photo');
            $destinationPath = public_path('/images/partners');
            $name = $photo->getClientOriginalName();
            $photo->move($destinationPath, $name);

            Partner::create([
            'photo'         => $name,
            'lien'          => request('lien'),
            ]);

            return redirect()->route('welcome')->with('status', 'Le partenaire  est bien créé');
        }
            return redirect()->route('welcome')->with('status', 'Le partenaire n\'est pas créé !!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $partner = Partner::findOrFail($id);
        $partner->delete();
        
        return redirect()->route('welcome')->with('status', 'Le partenaire est supprimé.');
    }
}
