<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\music;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin == false){
            $music = music::where('user_id', Auth::user()->id)->get();
        }else{
            $music = music::all();
        }

        return view('tables.musicTable', ['music' => $music]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.newMusic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = 'public/music';

        $inputs = request()->except('_token', '_method');
        $music = $_FILES['music'];
        $inputs['music'] = $music['name'];
        request(('music'))->storeAs($path, $music['name']);

        $photo = $_FILES['photo'];
        $inputs['photo'] = $photo['name'];
        request(('photo'))->storeAs($path, $photo['name']);

        auth()->user()->music()->create($inputs);

        return redirect()->route('music.index');
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
    public function addToExhibit(Request $req, $id){
        
        $inputs = $req->get('music');
        $var = music::where('exhibit_id', $id)->get();

        foreach($var as $var){
            $var->exhibit_id = NULL;
            $var->save();
        }

        if($inputs){
            
            foreach($inputs as $item){
                $music = music::where('id', $item);
                $input = ['exhibit_id' => $id];
                $music->update($input);
            }
        }
        return redirect()->route('exhibit.edit', $id);
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
        $music = music::find($id);
        
        if($music){
            $music->delete();
        }

        return redirect()->route('music.index');
    }
}
