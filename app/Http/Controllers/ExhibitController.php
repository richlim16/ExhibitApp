<?php

namespace App\Http\Controllers;

use App\Models\exhibit;
use App\Models\art;
use App\Models\poetry;
use Illuminate\Http\Request;

class ExhibitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exhibit = exhibit::all();
        $art = Art::all();
        $poetry = Poetry::all();
        return view('tables.exhibitsTable', ['exhibit' => $exhibit, 'art' => $art, 'poetry' => $poetry]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.newExhibit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $exhibit = auth()->user()->exhibit()->create($inputs);
        
        return redirect()->route('exhibit.edit', $exhibit->id);
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
        $exhibit = exhibit::find($id);
        $art = art::where('exhibit_id', $id)
                ->orWhere('exhibit_id', NULL)
                ->get();
        $poetry = poetry::where('exhibit_id', $id)
                ->orWhere('exhibit_id', NULL)
                ->get();
        
        return view('forms.updateExhibit', ['art' => $art, 'poetry' => $poetry, 'id' => $id, 'exhibit' => $exhibit]);
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
        $inputs = $request->except('_token', '_method');
        $exhibit = exhibit::where('id', $id)
                ->update($inputs);
        
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
        exhibit::where('id', $id)->delete();
        return redirect()->route("exhibit.index");
    }
}