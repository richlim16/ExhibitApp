<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\art;
use App\Models\artist;
use App\Models\exhibit;
use App\Models\music;
use App\Models\poetry;
use App\Models\transaction;

class formController extends Controller
{
    function insertArt(Request $request){
        $title = $request->input('artTitle');
        $type = $request->input('artType');
        $id = $request->input('userID');

        $art = new art;
        $art->ArtTitle = $title;
        $art->ArtType = $type;
        $art->userID = $id;
        $art->save();

        return redirect('/');
    }
    function updateArt(Request $request){
        $art = art::find($request->input('id'));
        if($art){
            $title = $request->input('artTitle');
            $type = $request->input('artType');
            $id = $request->input('userID');

            $art->ArtTitle = $title;
            $art->ArtType = $type;
            $art->userID = $id;
            $art->save();
        }
        

        return redirect('/');
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
    function updateArtist(Request $request){
        $name = $request->input('name');
        $email = $request->input('EmailAdd');

        $artist = artist::find($request->input('id'));
        $artist->name = $name;
        $artist->EmailAdd = $email;
        $artist->save();

        return redirect('/');
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
function updateExhibit(Request $request){
        $sDate = $request->input('StartDate');
        $eDate = $request->input('EndDate');
        $theme = $request->input('Theme');
        $transactionID = $request->input('TransactionID');

        $exhibit = exhibit::find($request->input('id'));
        $exhibit->StartDate = $sDate;
        $exhibit->EndDate = $eDate;
        $exhibit->Theme = $theme;
        $exhibit->TransactionID = $transactionID;

        $exhibit->save();
        return redirect('/');
    }

function insertMusic(Request $request){
        $title = $request->input('musicTitle');
        $genre = $request->input('genre');
        $userID = $request->input('userID');

        $music = new music;
        $music->MusicTitle = $title;
        $music->genre = $genre;
        $music->userID = $userID;
        $music->save();
        return redirect('/');
    }
function updateMusic(Request $request){
        $title = $request->input('musicTitle');
        $genre = $request->input('genre');
        $userID = $request->input('userID');

        $music = music::find($request->input('id'));
        $music->MusicTitle = $title;
        $music->genre = $genre;
        $music->userID = $userID;
        $music->save();
        return redirect('/');
    }

function insertPoetry(Request $request){
        $title = $request->input('poetryTitle');
        $id = $request->input('userID');

        $poetry = new poetry;
        $poetry->PoetryTitle = $title;
        $poetry->userID = $id;
        $poetry->save();
        return redirect('/');
    }
function updatePoetry(Request $request){
        $title = $request->input('poetryTitle');
        $id = $request->input('userID');

        $poetry = poetry::find($request->input('id'));
        $poetry->PoetryTitle = $title;
        $poetry->userID = $id;
        $poetry->save();
        return redirect('/');
    }

function insertTransaction(Request $request){
        $userID = $request->input('userID');
        $date = $request->input('transactionDate');

        $trans = new transaction;
        $trans->TransactionDate = $date;
        $trans->userID = $userID;
        $trans->save();
        return redirect('/');
    }
function updateTransaction(Request $request){
        $userID = $request->input('userID');
        $date = $request->input('transactionDate');

        $trans = transaction::find($request->input('id'));
        $trans->TransactionDate = $date;
        $trans->userID = $userID;
        $trans->save();
        return redirect('/');
    }

}
