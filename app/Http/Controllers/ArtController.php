<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\art;
use App\Models\User;
use Carbon\Carbon;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $art = Art::all();
        return view('tables.artTable', ['art' => $art]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.newArt');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $destination_path = 'public/art';

        $inputs = request()->except('_token');
        $photo = $_FILES['photo'];
        $inputs['photo'] = $photo['name'];
        request(('photo'))->storeAs($destination_path, $photo['name']);
        auth()->user()->art()->create($inputs);

        return redirect()->route('art.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $art = Art::find($id);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $art = Art::find($id);

        return view('forms.updateArt', ['art' => $art]);
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
        $destination_path = 'public/art';

        $inputs = request()->except(['_token', '_method']);
        $photo = $_FILES['photo'];
        
        if ($_FILES['photo']['size'] == 0)
        {
            
        } else{
            $inputs['photo'] = $photo['name'];
            request(('photo'))->storeAs($destination_path, $photo['name']);
            
        }
        Art::where('id', $id)
        ->update($inputs);
        
        return redirect()->route('art.index');
    }

    public function addToExhibit(Request $req, $id){
        
        $inputs = $req->get('art');
        $var = art::where('exhibit_id', $id)->get();

        foreach($var as $var){
            $var->exhibit_id = NULL;
            $var->save();
        }

        if($inputs){
            
            foreach($inputs as $item){
                $art = art::where('id', $item);
                $input = ['exhibit_id' => $id];
                $art->update($input);
            }
        }
        return redirect()->route('exhibit.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $art = Art::find($id);
        
        if($art){
            $art->delete();
        }

        return redirect()->route('art.index');
    }
}
