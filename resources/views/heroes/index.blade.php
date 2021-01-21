@extends('layouts.main')

@section('content')

{{-- http://127.0.0.1:8000/heroes --}}
    <div class="mini-wrapper">
        <ul class="no-list heroes-list">
            @foreach ($heroes as $hero)
                <li class="heroes text-center">
                    <a class="no-list" href="{{route('heroes.show', $hero->id)}}">
                        <h4 class="pb-1">Nome: {{$hero->name}}</h4>
                        <h4 class="pb-1">Simbolo: {{$hero->symbol}}</h4>
                    </a>
                </li>
            @endforeach
        </ul>

        {{-- <div class="btn flex jc-center mt-3">
            <a href="{{route('heroes.show', $hero->id)}}">Vedi i dettagli</a>
        </div> --}}
    </div>


@endsection
