<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Laravel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
    {{-- If User Logged In  --}}  
    @if (Auth::check())
      <li class="nav-item">
      <a class="nav-link" href="#">{{ Auth::user()->getName() }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}">Logout</a>
      </li>
    @else
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login')}}">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('registration')}}">Register</a>
    </li>

    @endif  
    </ul>
  </div>
</nav>