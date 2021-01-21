@extends('layouts.main')

@section('content')

{{-- http://127.0.0.1:8000/heroes/create --}}

    {{-- Array contenenti validazioni non andate a buon fine--}}
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- Lo faccio puntare alla rotta .store in quanto utlizzando il metodo POST serve per salvare le informazioni --}}
    <form action="{{route('heroes.store')}}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="name">Nome dell'eroe</label>
            <input type="text" name="name" value="{{old('name')}}">
        </div>

        <div class="form-group">
            <label for="symbol">Il simbolo dell'eroe</label>
            <input type="text" name="symbol" value="{{old('symbol')}}">
        </div>

        <div class="form-group">
            <label for="description">Descrizione dell'eroe</label>
            <textarea name="description">{{old('description')}}</textarea>
            <input type="submit" value="Create">
        </div>



    </form>

@endsection
