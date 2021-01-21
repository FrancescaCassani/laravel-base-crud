@extends('layouts.main')

@section('content')

<section class="wrapper">
    <div class="pt-4">
        <p>Un supereroe è un personaggio di fumetti, narrativa, cartoni animati o film che si caratterizza per le sue doti di coraggio e nobiltà e che generalmente ha abilità straordinarie, dette superpoteri, rispetto a quelle degli esseri umani normali oltre a possedere un nome e un costume pittoresco.</p>
    </div>

    <div class="btn flex jc-center mt-3">
        <a href="{{route('heroes.index')}}" class="no-list">
            <small>Clicca per scoprirli...</small>
        </a>
    </div>
</section>

@endsection
