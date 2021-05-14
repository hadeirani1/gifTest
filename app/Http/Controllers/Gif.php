<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Gif extends Controller
{
    //
    public function index(Request $request)
    {
  
        $apiKey = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMzdkOWZiYjVkODllMzc0NTI2OTczY2Y1ZDUwZTQyNThhZTEwNjQ5ODFlZTIyYTMyMTljNDM4OGJkNTk4OTI1OTc1YThkZGZiNzVkMDI2NzMiLCJpYXQiOjE2MjEwMDY3NzcuMTg2OSwibmJmIjoxNjIxMDA2Nzc3LjE4NjkwNCwiZXhwIjoxNjUyNTQyNzc3LjE2ODI5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.c9BowCA190cFaksY4-EhGSE3ltgg4zNLVjYhkeayd0r0EQXJNLBvgo-p9mWPIYvUu2XGL-YuVo131UccQOsxGasEbYP-aiDd_fCZeX6YtVOjj-BpCW43xh8J60mIr1tnCZ5e4pSzsPtzinaaNLpXMgd3ObxWcjPgnzcn3qQz9xOukF3Wsy6Dz5rRi55VCUnfnQOKAX2jU8woUUj39EQkpRZjyk_zdHHIWkGCBysVyl3s7CCS8D-BOHXU560Iwhd88lVRIQ6jHzOTR1QrpRPebEwWg4aG2sENUSBME4znKgfLoVWkEKrhj2vUf0eK5LspmuYTPdXHUdmuHgP2dIlIiEtUAkij4uffd7Mqfks-MMZSRzYmbVCpQ7iYqBjBapvCxJneorLkaqBrvPAAn8iAhhlYuO3V5Y3HkTqHPbU4gVbAFXhggcI-Y4bwvCPFRyX8illmNTWyuV8-qimKuvkct8y115Xm1zW4Vyg9JBaX1hdVR87BFC5MTPM9CmvQw8LHxGnSKZikXxMJc_lj_bJbXTGrV9OMrQsGSeN6ZLqurM5qQv5i31OZKLK3iNr79CzhD_3lDPMIczW1uz7Nday8jxV7hFUbQVK4tswAR0Qy6SoEBBixRti8CJppwoIwq1vzo7MAaR91qPJZ8-gTS87YkIypvBozpi2C7eiQIhXXxsk";

        if(isset($request->page)){
            $pageNumber = $request->page;
            
        }  
        else{
            $pageNumber = 1;
        }
         $allGifs = Http::withHeaders([
            'accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $apiKey
        ])
        ->get('http://localhost:8001/api/gif'.'?page='.$pageNumber)
        ->json();

        
        return view('gif',['allGifs'=> $allGifs]);
    }

    public function search(Request $request)
    {
  
        $apiKey = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMzdkOWZiYjVkODllMzc0NTI2OTczY2Y1ZDUwZTQyNThhZTEwNjQ5ODFlZTIyYTMyMTljNDM4OGJkNTk4OTI1OTc1YThkZGZiNzVkMDI2NzMiLCJpYXQiOjE2MjEwMDY3NzcuMTg2OSwibmJmIjoxNjIxMDA2Nzc3LjE4NjkwNCwiZXhwIjoxNjUyNTQyNzc3LjE2ODI5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.c9BowCA190cFaksY4-EhGSE3ltgg4zNLVjYhkeayd0r0EQXJNLBvgo-p9mWPIYvUu2XGL-YuVo131UccQOsxGasEbYP-aiDd_fCZeX6YtVOjj-BpCW43xh8J60mIr1tnCZ5e4pSzsPtzinaaNLpXMgd3ObxWcjPgnzcn3qQz9xOukF3Wsy6Dz5rRi55VCUnfnQOKAX2jU8woUUj39EQkpRZjyk_zdHHIWkGCBysVyl3s7CCS8D-BOHXU560Iwhd88lVRIQ6jHzOTR1QrpRPebEwWg4aG2sENUSBME4znKgfLoVWkEKrhj2vUf0eK5LspmuYTPdXHUdmuHgP2dIlIiEtUAkij4uffd7Mqfks-MMZSRzYmbVCpQ7iYqBjBapvCxJneorLkaqBrvPAAn8iAhhlYuO3V5Y3HkTqHPbU4gVbAFXhggcI-Y4bwvCPFRyX8illmNTWyuV8-qimKuvkct8y115Xm1zW4Vyg9JBaX1hdVR87BFC5MTPM9CmvQw8LHxGnSKZikXxMJc_lj_bJbXTGrV9OMrQsGSeN6ZLqurM5qQv5i31OZKLK3iNr79CzhD_3lDPMIczW1uz7Nday8jxV7hFUbQVK4tswAR0Qy6SoEBBixRti8CJppwoIwq1vzo7MAaR91qPJZ8-gTS87YkIypvBozpi2C7eiQIhXXxsk";

        if(isset($request->page)){
            $pageNumber = $request->page;
            
        }  
        else{
            $pageNumber = 1;
        }

        if(isset($request->gifKey))
        session(['gifKey' => $request->gifKey]);


         $gifKeyData = Http::withHeaders([
            'accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $apiKey
        ])
        ->get('http://localhost:8001/api/gif?gif-key='.$request->gifKey.'&page='.$pageNumber)
        ->json();
        return view('gif',['gifKeyData'=> $gifKeyData]);
    }




}
