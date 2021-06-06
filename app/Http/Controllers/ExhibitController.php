<?php

namespace App\Http\Controllers;

use App\Models\exhibit;
use App\Models\art;
use App\Models\poetry;
use App\Models\music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExhibitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin == false){
            $exhibit = exhibit::where('user_id', Auth::user()->id)->get();
        }else{
            $exhibit = exhibit::all();
        }
        return view('tables.exhibitsTable', ['exhibit' => $exhibit]);
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
        $exhibit->where('startDate', '<=', $request['startDate']);
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
        $music = music::where('exhibit_id', $id)
                ->orWhere('exhibit_id', NULL)
                ->get();
        if(Auth::user()->admin == false){
            $art = $art->where('user_id', Auth::user());
            $poetry = $poetry->where('user_id', Auth::user());
            $music = $music->where('user_id', Auth::user());
        }
        
        return view('forms.updateExhibit', ['art' => $art, 'poetry' => $poetry, 'id' => $id, 'exhibit' => $exhibit, 'music' => $music]);
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
