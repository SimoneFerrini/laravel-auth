@extends('layouts/admin')

@section('content')
    <div class="pt5">

        <h1>{{$project->title}}</h1>
        <br>
        <hr>
        <br>
        <p>{{$project->description}}</p>
        <hr>
        <a href="{{$project->link}}">Scarica progetto</a>
    </div>
@endsection