      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between px-5 py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <h2 class="fw-bold">MyStudents</h2>
        </a>
      </div>
      
      @if(!Auth::check())
      <div class="col-md-3 text-end">
        <a href="{{ url('login') }}" class="btn btn-sm btn-outline-primary me-2">Login</a>
        <a href="{{ url('signup') }} " class="btn btn-sm btn-primary">Sign-up</a>
        @else
        <button type="button" data-bs-toggle="modal" data-bs-target="#logoutModal" class="btn btn-danger">Logout</button>
        
      </div>
      @endif
    </header>