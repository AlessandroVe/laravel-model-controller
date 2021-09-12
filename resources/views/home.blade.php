@extends('templates.base')

@section('title', 'HomePage')

@section('content')
 <h1>i nostri movie</h1>
 @foreach( $all_Movies as $movie)
    <div class="card">
        <div>titolo:{{$movie['title']}} -- {{$movie['original_title']}} </div>
        <div>nazionalita':{{$movie['nationality']}}</div> 
        <div>data:{{$movie['date']}}</div>   
        <div>voto:{{$movie['vote']}}</div>                        
    </div>
    <br>
 @endforeach
@endsection
