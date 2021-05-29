<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poetry;
use Carbon\Carbon;

class PoetryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poetry = Poetry::all();
        return view('tables.poetriesTable', ['poetry' => $poetry]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('forms.newPoetry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $inputs = request()->except('_token');
        auth()->user()->poetry()->create($inputs);

        return redirect()->route('poetry.index');
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
        $poetry = Poetry::find($id);

        return view('forms.updatePoetry', ['poetry' => $poetry]);
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
        
        $inputs = request()->except('_token', '_method');
        Poetry::where('id', $id)
            ->update($inputs);

        return redirect()->route('poetry.index');
    }



    
    public function addToExhibit(Request $req, $id){
        $inputs = $req->get('poetry');
        $var = poetry::where('exhibit_id', $id)->get();

        foreach($var as $var){
            $var->exhibit_id = NULL;
            $var->save();
        }
        if($inputs){
            foreach($inputs as $item){
                $art = poetry::where('id', $item);
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
        $poetry = Poetry::find($id);
        if($poetry){
            $poetry->delete();
        }

        return redirect()->route('poetry.index');
    }
}
