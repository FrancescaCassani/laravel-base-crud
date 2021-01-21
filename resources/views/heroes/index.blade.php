@extends('layouts.main')

@section('content')
    <div class="wrapper">
        <ul class="no-list heroes-list">
            @foreach ($heroes as $hero)
                <li class="heroes">
                    <h4 class="pb-1">Nome: {{$hero->name}}</h4>
                    <h4 class="pb-1">Simbolo: {{$hero->symbol}}</h4>
                    <p class="pb-1">Descrizione: {{$hero->description}}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
