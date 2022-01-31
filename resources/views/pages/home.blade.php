@extends('layouts.main-layout')
@section('content')
    <h2>Lista Films</h2>
    <h4><a href=" {{route('create')}} ">Create new</a></h4>
    <ul>
        @foreach ($movies as $movie)
            
            <li>
                <a href=" {{ route('show', $movie -> id) }} ">

                    {{ $movie -> title }} - {{ $movie -> release_date }} 
                    - <a href=" {{ route('edit', $movie -> id)}} ">EDIT</a> 
                    - <a href=" {{ route('delete', $movie -> id)}} ">DELETE</a>
                </a>
            </li>
        @endforeach
    </ul>
@endsection