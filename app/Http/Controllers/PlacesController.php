<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlacesController extends Controller
{
    //

    public function index(){
        return view('place');
    }


    public function search(Request $request){

        $query = $request->input('query');
       $ch = curl_init(url('/api/place?query='. urlencode($query)));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        return view('viewplace', [
            'results' => json_decode($response),
        ]);
    }


    public function view(Request $request, $id){

        $ch = curl_init(url('api/place/'.$id));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        return view('result', [
            'result' => json_decode($response),
        ]);

    }
}
