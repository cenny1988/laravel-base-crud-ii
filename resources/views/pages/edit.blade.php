@extends('layouts.main-layout')
@section('content')
    <h2>Update new Movie</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action=" {{route('update', $movie -> id)}} " method="POST">
        @method("POST")
        @csrf

        <label for="title">Titolo:</label>
        <input type="text" name="title" placeholder="title" value=" {{ $movie -> title }} "><br>
        <label for="subtitle">Sottotitolo:</label>
        <input type="text" name="subtitle" placeholder="subtitle" value=" {{ $movie -> subtitle }} "><br>
        <label for="release_date">Data:</label>
        <input type="date" name="release_date" value="{{ $movie -> release_date }}"><br>

        <input type="submit" value="UPDATE">
        <hr>
    </form>

@endsection