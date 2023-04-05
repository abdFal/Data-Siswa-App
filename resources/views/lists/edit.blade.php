@extends('layouts.app')
@section('title', 'Edit')
@section('content')
<form method="POST" action="{{ url('edit', $siswa->id) }}">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" />
    </div>
    <div class="form-group">
        <label for="kelas">Kelas:</label>
        <input type="number" class="form-control" name="kelas" value="{{ $siswa->kelas }}" />
    </div>
    <div class="form-group mb-3">
        <label class="label-jurusan" for="jurusan">Jurusan:</label>
            <select class="rounded-3 px-3 py-1" name="jurusan" id="jurusan">
                <option value="{{ $siswa->jurusan }}" disabled>{{ $siswa->jurusan }}</option>
                <option value="TKJ">TKJ</option>
                <option value="RPL">RPL</option>
                <option value="DMM">DMM</option>
                <option value="KGSP">KGSP</option>
            </select>
    </div>
    <button type="submit" class="btn btn-sm btn-primary">Update</button>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-sm btn-danger">Delete</button>
</form>
                    
<a class="text-small" href="{{url('/')}}">Back</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Delete Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are u sure to delete the student named <span class="fw-bold text-danger">{{$siswa->nama}}</span> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form method="post" action="{{ url('edit', $siswa->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
      </div>
    </div>
  </div>
</div>

@endsection