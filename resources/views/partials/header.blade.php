<header>
    <section class="wrapper mb-4">
        <nav class="no-list flex jc-center text pt-2">
            <div class="heroes-brand">
                <a href="">
                    <img src="{{route('home')}}" alt="">
                </a>
            </div>

            <div class="navbar">
                <ul class="no-list flex jc-center">
                    <li class="pr-2">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="pr-2">
                        {{-- Prendo la rotta dal HeroController --}}
                        <a href="{{route('heroes.index')}}">Heroes</a>
                    </li>
                    <li class="pr-2">
                        <a href="{{route('heroes.create')}}">Add your hero</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
</header>
