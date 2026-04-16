<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}" >pagina principal
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('ingresos') ? 'active' : '' }}"  aria-current="page" href="{{route('ingresos')}}">ingresos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->is('compras') ? 'active' : '' }}" href="{{route('compras')}}">compras</a>
        </li>
        <li class="nav-item">
            <a href="{{route('ropa')}}" class="nav-link {{request()->is('ropa') ? 'active' : '' }}">ropa</a>
        </li>
      </ul>
      <form class="d-flex">
        <a href="{{route('login')}}" class="btn btn-outline-success {{request()->is('login') ? 'active' : '' }}" >login</a>
      </form>
    </div>
  </div>
</nav>