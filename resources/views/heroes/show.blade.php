@extends('layouts.main')

@section('content')


    <div class="wrapper">
        <ul class="no-list heroes-list">
            <li class="heroes no-list">
                <h4 class="pb-1">Nome: {{$hero->name}}</h4>
                <h4 class="pb-1">Simbolo: {{$hero->symbol}}</h4>
                <p class="pb-1">Descrizione: {{$hero->description}}</p>
            </li>
        </ul>
    </div>
@endsection
