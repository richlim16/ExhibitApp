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
}
