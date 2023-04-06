@extends('layouts.app')
@section("title", 'Account')

@section('content')

    <div class="row">
      <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a  class="fw-bold" href="{{url('/')}}">
                        All Students
                    </a>
                </li>
                <li>
                    <a href="{{url('show/RPL')}}">RPL</a>
                </li>
                <li>
                    <a href="{{url('show/TKJ')}}">TKJ</a>
                </li>
                <li>
                    <a href="{{url('show/DMM')}}">DMM</a>
                </li>
                <li>
                    <a href="{{url('show/KGSP')}}">KGSP</a>
                </li>
                <li>
                    <a href="{{url('account')}}">Account</a>
                </li>
                            </ul>
        </div>
    </div>
      <div class="col-md-9">
        <h2 class="fw-bold"><i class="fa-solid fa-user me-3"></i>{{ Auth::user()->name }}</h2>
        <h6 class="text-muted">{{ Auth::user()->email }}</h6>
        <p>Ini adalah halaman akun Anda. Anda dapat mengakses profil Anda, pesan Anda, dan pengaturan akun Anda melalui menu di sebelah kiri.</p>
        <div class="card w-50 mb-3">
          <div class="card-header">
            Menu
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="#">Profil</a></li>
            <li class="list-group-item"><a href="#">Pesan</a></li>
            <li class="list-group-item"><a href="#">Pengaturan</a></li>
            <li class="list-group-item"><a href="#">Bantuan</a></li>
          </ul>
        </div>
        <button type="button" data-bs-toggle="modal" data-bs-target="#logoutModal" class="btn btn-danger"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
      </div>

    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 fw-bold" id="logoutModalLabel">Logout Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are u sure to logout ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{ url('logout') }} " class="btn btn-md btn-outline-danger">Logout</a>
      </div>
    </div>
  </div>
</div>
@endsection