@extends('template.index')

@section('content')
    
<div class="container favorites">

    <div class="home">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <h5>Hi there, {{$username}}! Here you can find all of your favorite festivals!</h5>
            </div>
        </div>
    </div>
    

        <div class="favorites"></div>
        <div class="row row-cols-1 row-cols-md-5">
            @foreach($festivals as $festival)
            <div class="col mb-1">
                <div class="card">
                    <img src="{{$festival->img}}" class="card-img-top" alt="{{$festival->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$festival->name}}</h5>
                        <p class="card-text">{{$festival->country}}</p>
                        <p class="card-text"><small class="text-muted">{{$festival->city}}</small></p>
                        <p>Date: 
                            <br>
                            from 
                            <br>
                            <b>{{$festival->starts_at ? $festival->starts_at->toFormattedDateString() : "unknown"}}</b>
                            <br>
                             till 
                             <br>
                             <b>{{$festival->ends_at ? $festival->ends_at->toFormattedDateString() : "unknown"}}</b>
                        </p>
                        <p>Festival homepage: <a href="{{$festival->URL}}"> {{$festival->name}}</a></p>


                    {{-- This is the old way of making a form (seen on a tutorial on youtube), i'll leave this here as an example   --}}


                    {{-- <a class="btn btn-info" href="{{route('favRemove', ['id'=> $festival])}}">Remove</a> --}}

                    {{-- {!!Form::open(['action' => ['FavoriteController@remove', $festival], 'method' => 'POST'])!!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-info']) !!}
                    {!! Form::close() !!} --}}

                    
                    {{-- This is the "NEW" way of making a form! --}}
                    <form action="{{route('favRemove', ['id'=> $festival])}}" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button class="btn btn-info" type="submit">Remove</button>
                    </form>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
        
</div>

@endsection