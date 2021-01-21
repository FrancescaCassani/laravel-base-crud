@extends('layouts.main')

@section('content')
    <div class="mini-wrapper">
        <ul class="no-list heroes-list">
            @foreach ($heroes as $hero)
                <li class="heroes text-center">
                    <a href="{{route('heroes.show', $hero->id)}}">
                    <h4 class="pb-1">Nome: {{$hero->name}}</h4>
                    <h4 class="pb-1">Simbolo: {{$hero->symbol}}</h4>
                </li>
            @endforeach
        </ul>

        {{-- <div class="btn flex jc-center mt-3">
            <a href="{{route('heroes.show', $hero->id)}}">Vedi i dettagli</a>
        </div> --}}
    </div>


@endsection
