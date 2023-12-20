<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link {{ Route:: is('home') ? 'active' : ''}}" {{ Route:: is('home') ? 'aria-current="page"' : ''}} href="{{route('home')}}">Home</a>
            <a class="nav-link {{ Route:: is('podcasts') ? 'active' : ''}}" href="{{route('podcasts')}}" {{ Route:: is('home') ? 'aria-current="page"' : ''}}>My podcasts</a>
            <a class="nav-link {{ Route:: is('contact') ? 'active' : ''}}" href="{{route('contact')}}" {{ Route:: is('home') ? 'aria-current="page"' : ''}}>Contact</a>
            {{-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
        </div>
        </div>
    </div>
</nav>