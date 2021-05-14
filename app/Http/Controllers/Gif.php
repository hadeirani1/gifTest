<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Gif extends Controller
{
    //
    public function index(Request $request)
    {
  
        //Checking page number
        if(isset($request->page)){
            $pageNumber = $request->page;
            
        }  
        else{
            $pageNumber = 1;
        }
        
        //get all GIFs
        $allGifs = Http::get('http://localhost:8001/api/gif'.'?page='.$pageNumber)->json();

        
        return view('gif',['allGifs'=> $allGifs]);
    }

    public function search(Request $request)
    {
  
        //Checking page number
        if(isset($request->page)){
            $pageNumber = $request->page;
            
        }  
        else{
            $pageNumber = 1;
        }

        //Checking GIF keyword
        if(isset($request->gifKey))
        session(['gifKey' => $request->gifKey]);

        //Get a specific keyword data
        $gifKeyData = Http::get('http://localhost:8001/api/gif?gif-key='.$request->gifKey.'&page='.$pageNumber)->json();

        return view('gif',['gifKeyData'=> $gifKeyData]);
    }




}
