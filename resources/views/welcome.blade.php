@extends('layouts/master')
<h1 style="text-align:center; margin-top:20px; color:black">URL SHORTENER</h1>
@section('content')

    <h1>De beaux petits URL </h1>
    <form action="" method="post">
        {{ csrf_field() }}

         {!! $errors->first('url-name', '<div class="error">:message </div>') !!}
        <input type="text" name="url-name" id="url-name" placeholder="entrer votre url ici" value="{{ old('url-name')}}">
        <input type="submit" value="Raccourcir !">
    </form>

@endsection
