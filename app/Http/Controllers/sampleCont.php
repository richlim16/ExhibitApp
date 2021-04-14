<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\art;
use App\Models\artist;
use App\Models\exhibit;
use App\Models\music;
use App\Models\poetry;
use App\Models\transaction;
class sampleCont extends Controller
{
    function home(){
        $art = art::all();
        $artist = artist::all();
        $exhibit = exhibit::all();
        $music = music::all();
        $poetry = poetry::all();
        $transaction = transaction::all();

        return view('welcome')->with('art', $art)->with('artist', $artist)->with('exhibit', $exhibit)->with('music', $music)->with('poetry', $poetry)->with('transaction', $transaction);
    }

    function artTable(){
        $art = art::all();

        return view('tables/artTable')->with('art', $art);
    }
    function artistTable(){
        $artist = artist::all();

        return view('tables/artistTable')->with('artist', $artist);
    }
    function exhibitsTable(){
        $exhibit = exhibit::all();

        return view('tables/exhibitsTable')->with('exhibit', $exhibit);
    }
    function musicTable(){
        $music = music::all();

        return view('tables/musicTable')->with('music', $music);
    }
    function poetriesTable(){
        $poetry = poetry::all();

        return view('tables/poetriesTable')->with('poetry', $poetry);
    }
    function transactionsTable(){
        $transaction = transaction::all();

        return view('tables/transactionsTable')->with('transaction', $transaction);
    }

    function insertArt(Request $request){
        $title = $request->input('artTitle');
        $type = $request->input('artType');
        $id = $request->input('artistID');

        $art = new art;
        $art->ArtTitle = $title;
        $art->ArtType = $type;
        $art->ArtistID = $id;
        $art->save();

        return redirect('/');
    }
    function newArt(){
        return view('forms/newArt');
    }

    function insertArtist(Request $request){
        $name = $request->input('name');
        $email = $request->input('EmailAdd');

        $artist = new artist;
        $artist->name = $name;
        $artist->EmailAdd = $email;
        $artist->save();

        return redirect('/');
    }
    function newArtist(){
        return view('forms/newArtist');
    }

    function insertExhibit(Request $request){
        $sDate = $request->input('StartDate');
        $eDate = $request->input('EndDate');
        $theme = $request->input('Theme');
        $transactionID = $request->input('TransactionID');

        $exhibit = new exhibit;
        $exhibit->StartDate = $sDate;
        $exhibit->EndDate = $eDate;
        $exhibit->Theme = $theme;
        $exhibit->TransactionID = $transactionID;

        $exhibit->save();
        return redirect('/');
    }
    function newExhibit(){
        return view('forms/newExhibit');
    }

    function insertMusic(Request $request){
        $title = $request->input('musicTitle');
        $genre = $request->input('genre');
        $artistID = $request->input('artistID');

        $music = new music;
        $music->MusicTitle = $title;
        $music->genre = $genre;
        $music->ArtistID = $artistID;
        $music->save();
        return redirect('/');
    }
    function newMusic(){
        return view('forms/newMusic');
    }

    function insertPoetry(Request $request){
        $title = $request->input('poetryTitle');
        $id = $request->input('artistID');

        $poetry = new poetry;
        $poetry->PoetryTitle = $title;
        $poetry->ArtistID = $id;
        $poetry->save();
        return redirect('/');
    }
    function newPoetry(){
        return view('forms/newPoetry');
    }

    function insertTransaction(Request $request){
        $artistID = $request->input('artistID');
        $date = $request->input('transactionDate');

        $trans = new transaction;
        $trans->TransactionDate = $date;
        $trans->ArtistID = $artistID;
        $trans->save();
        return redirect('/');
    }
    function newTransaction(){
        return view('forms/newTransaction');
    }

}
