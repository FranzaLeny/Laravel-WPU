<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="/">FXIL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == '' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'posts' ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'categories' ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Wellcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                      <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="dropdown-item">Logout <i
                            class="bi bi-arrow-left-circle text-success"></i></button>
                      </form></li>
                </ul>
              </li>
              @else  
                  <li class="nav-item"><a href="/login"
                          class="nav-link {{ Request::segment(1) == 'login' ? 'active' : '' }}"><i
                          class="bi bi-arrow-right-circle text-success"></i> Login</a></li>
            @endauth
            </ul>
        </div>
    </div>
</nav>
