@extends('layouts.app')

@section('content')  
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">List of shops</li>
</ol>    

<div class="container">
    <div class="row  justify-content-center">

        @if (count($shops) > 0)
            @foreach ($shops as $shop)
                <div class="col" id="{{$shop->id}}">
                    <div class="card  text-center" id="shop" style="width: 18rem;">
                        <div class="card-header">{{$shop->shopname}} - {{$shop->location}}m</div>
                        <div class="card-body">
                            <img src="{{ asset('storage/01.png') }}" class="card-img-top" alt="...">
                            @if (!Auth::guest())
                                <div class="d-inline-block">
                                    <!-- Like a shop -->
                                    {!!Form::open(['action'=>'PreferedShopsController@store','method'=>'POST','class'=>'pull-left'])!!}
                                        {{Form::hidden('shop_id',$shop->id)}}
                                        {{Form::submit('Like',['class'=>'btn btn-primary'])}}
                                    {!!Form::close()!!}
                                </div>
                                <div class="d-inline-block">
                                    <button  type="button" class="btn btn-danger" onclick="myFunction({{$shop->id}})">Dislike</button>
                                    {{-- <!-- Dislike a shop -->
                                    {!!Form::open(['action'=>['PreferedShopsController@store',$shop->id],'method'=>'POST','class'=>'pull-right'])!!}
                                        {{Form::submit('Dislike',['class'=>'btn btn-danger'])}}
                                    {!!Form::close()!!} --}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- this script is executed when we click on Dislike button --}}
            <script>
                function myFunction(id) {
                    var currentTime = ''
                    var hours = new Date(new Date().getTime()+2*3600*1000);
                    var newElement = document.getElementById(id);
                    document.cookie='Dislike_Cookie=true;expires='+hours+';path=/';
                    //document.getElementById(nme).style.display='none';
                             
                    if(hours > currentTime) {
                    newElement.style.display = "none";
                    }
                    newElement.style.visibility = '';
                }
            </script>
        @else
            <p>No shops found !!!</p>
        @endif
    </div>
    <div class="row justify-content-center">{{$shops->links()}}</div>
</div>
@endsection
