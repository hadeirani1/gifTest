@extends('layouts.app')

@section('content')
<div class="container">


<div class="row">
        <div class="col-md-12">
<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" method="get" action="{{ url('search') }}">
                                
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" id="gifKey" name="gifKey" placeholder="Search for your GIF">

                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto" style = "margin-left:10px;" >
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
                    </div> 
                </div>
                <br/>
                <div class="col-sm-6 text-right">
        @if(isset($gifKeyData['meta']['total']))
            <em>{{$gifKeyData['meta']['total']}} GIFs found</em>
        @endif
        </div>
        <br/>

    <div class="row">
        <div class="col-md-12">
            <div id="grid" class="row">

            @if(isset($gifKeyData))

            @foreach($gifKeyData['data'] as $gif)
                <div class="mix col-sm-3 page1 page4 margin30">
                    <div class="item-img-wrap " >
                        <img src="{{$gif['href']}}" class="img-responsive" alt="workimg" style="height:200px; width:250px;">
                        <div class="item-img-overlay">
                            <a href="#" class="show-image">
                                <span></span>
                            </a>
                        </div>
                    </div> 
                </div>
                
                
            @endforeach
            @else
            @if(isset($allGifs))
            @foreach($allGifs['data'] as $gif)
                <div class="mix col-sm-3 page1 page4 margin30">
                    <div class="item-img-wrap " >
                        <img src="{{$gif['href']}}" class="img-responsive" alt="workimg" style="height:200px; width:250px;">
                        <div class="item-img-overlay">
                            <a href="#" class="show-image">
                                <span></span>
                            </a>
                        </div>
                    </div> 
                </div>
                @endforeach

                @else
                <div class="row">
                    <h2 class=" text-center">No GIFs found !</h2>
                </div>

                @endif
                
            @endif

          
                                                         
            </div><!--grid-->
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-3">
            <ul class="pagination">
                
               

                @if(isset($gifKeyData))
                
            @foreach($gifKeyData['meta']['links'] as $gif)
            
            @if ($loop->first) @continue @endif
            @if ($loop->last) @continue @endif

                <li class="<?php if($gif['active']) echo "active"; ?>"><a href="<?php if(!$gif['active'])  echo url('search')."?gifKey=".session('gifKey')."&page=".$gif['label']; else echo "#" ?>">{{$gif['label']}}</a></li>
              
                
                
            @endforeach
      
            @else
            @if(isset($allGifs))

            @foreach($allGifs['links']  as $gif)
            @if ($loop->first) @continue @endif
            @if ($loop->last) @continue @endif
                <li class="<?php if($gif['active']) echo "active"; ?>"><a href="<?php if(!$gif['active'])  echo url('gif')."?page=".$gif['label']; else echo "#" ?>">{{$gif['label']}}</a></li>
              
                
                @endforeach

                @else


                @endif
                
            @endif
            </ul>
        </div>
        
    </div>
</div>
@endsection
