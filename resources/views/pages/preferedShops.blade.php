@extends('layouts.app')

@section('content')  
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">My prefered shops</li>
</ol>    

<div class="container">
    <div class="row  justify-content-center">

        @if (count($preferedShops) > 0)
            @foreach ($preferedShops as $preferedShop)
                <div class="col">
                    <div class="card  text-center" id="shop" style="width: 18rem;">
                        <div class="card-header">{{$preferedShop->shopname}}</div>
                        <div class="card-body">
                            <img src="{{ asset('storage/01.png') }}" class="card-img-top" alt="...">
                            @if (!Auth::guest())
                                <div class="d-inline-block">
                                    <!-- Dislike a shop -->
                                    {!!Form::open(['action'=>['PreferedShopsController@destroy',$preferedShop->id],'method'=>'POST','class'=>'pull-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Dislike',['class'=>'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No shops found !!!</p>
        @endif
    </div>
    <div class="row justify-content-center">{{$preferedShops->links()}}</div>
</div>
@endsection
