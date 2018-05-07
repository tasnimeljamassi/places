<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $request = request();
        $query = $request->query('query');
        if (empty($query)) {
            return '{error: "No query found"}';
        }

        $url = sprintf('https://maps.googleapis.com/maps/api/place/textsearch/json?query=%s&key=%s',
            urlencode($query),
            env('GOOGLE_API_KEY'));
        $ch = curl_init($url);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);

        return $response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        if (empty($id)) {
            return '{error: "No Place ID found"}';
        }

        $url = sprintf('https://maps.googleapis.com/maps/api/place/details/json?placeid=%s&key=%s',
            $id,
            env('GOOGLE_API_KEY'));
        $ch = curl_init($url);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);

        return $response;
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
        //
    }
}
