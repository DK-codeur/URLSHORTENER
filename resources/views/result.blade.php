@extends('layouts/master')

@section('content')
     <h1>Bravo ! voici votre URL raccourcit :</h1>

    <a href="{{config('app.url')}}/{{$rac}}" target="_blank">
        {{ config('app.url')}}/{{$rac}}
    </a>
    <br>
    <br>
    <div> <a href="{{route('Home_path')}}"> << retour </a> </div>
@endsection