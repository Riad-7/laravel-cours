<nav class="navbar navbar-expand-lg navbar-light bg-light container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Accueil</a>
      </li>
      <li class="nav-item">
<<<<<<< HEAD
        <a class="nav-link" href={{ route('profil.index') }}>Mon profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='/profil/create'>Ajouter profil</a>
=======
        <a class="nav-link" href="{{ route('profiles.index') }}">Mes profiles</a>
>>>>>>> dab61387846cb07703331875178a3489e458d809
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('info.index') }}">Mes informations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('create') }}">Ajouter Profile</a>
      </li>
    </ul>
  </div>
</nav>