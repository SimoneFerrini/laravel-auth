@extends('layouts/admin')

@section('content')
    <div class="bg-black">

        <table class="mt-5 table table-stiped bg-dark text-white">
            <thead>
                <th>
                    Titolo
                </th>
                <th>
                    Descrizione
                </th>
                <th>
                    Slug
                </th>
            <th>
                Link
            </th>
        </thead>
        
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->slug}}</td>
                <td><a href="{{$project->link}}"><i class="fa-solid fa-file-arrow-down"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection