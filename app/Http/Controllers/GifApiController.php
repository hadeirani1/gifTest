<?php

namespace App\Http\Controllers;

use App\Models\GifApi;
use Illuminate\Http\Request;
use Response;
use App\Http\Resources\GifCollection;

class GifApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(request()->has('gif-key'))
        return $this->get_gif_by_key(request(),2);
        else
        return $this->get_all_gifs(request(),2);
    }


    private function get_gif_by_key(Request $request ,$pages)
    {
        
            $gif_key = $request->get('gif-key');
            $gif = GifApi::where('key', '=', $gif_key)->paginate($pages)->appends($request->query());;   
            if($gif->isNotEmpty())   
                return GifCollection::collection($gif);
            else 
                return "No GIFs found for " . $gif_key;

    }

    private function get_all_gifs(Request $request ,$pages)
    {
        return GifCollection::collection(GifApi::paginate($pages))->appends($request->query());;
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
     * @param  \App\Models\GifApi  $gifApi
     * @return \Illuminate\Http\Response
     */
    public function show(GifApi $gifApi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GifApi  $gifApi
     * @return \Illuminate\Http\Response
     */
    public function edit(GifApi $gifApi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GifApi  $gifApi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GifApi $gifApi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GifApi  $gifApi
     * @return \Illuminate\Http\Response
     */
    public function destroy(GifApi $gifApi)
    {
        //
    }
}
