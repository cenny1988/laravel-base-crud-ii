@extends('layouts.main-layout')
@section('content')
    <h3>Page Show details</h3>
    <h5>Titolo del film: {{ $movie -> title }} </h5>
    <h5>Sottotitolo: {{ $movie -> subtitle }} - {{ $movie -> release_date }} </h5>

    <a href=" {{route('home')}} ">Home</a>
@endsection