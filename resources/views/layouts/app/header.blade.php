<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between px-3 py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <h2 class="fw-bold">SiswaKu</h2>
        </a>
      </div>


      @if(!Auth::check())
      <div class="col-md-3 text-end">
        <a href="{{ url('login') }}" class="btn btn-outline-primary me-2">Login</a>
        <a href="{{ url('signup') }} " class="btn btn-primary">Sign-up</a>
        @else
        <a href="{{ url('logout') }} " class="btn btn-warning">Logout</a>
      </div>
      @endif
    </header>