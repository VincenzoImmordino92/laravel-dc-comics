<header>
    <div class="container">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}" href="{{route('comics.index')}}">I Fumetti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Route::currentRouteName() === 'comics.create' ? 'active' : '' }}" href="{{route('comics.create')}}">Aggiungi Nuovo Fumetto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">contatti</a>
            </li>
          </ul>

    </div>
</header>
