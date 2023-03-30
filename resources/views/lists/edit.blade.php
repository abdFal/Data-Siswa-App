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
    <div class="form-group mb-3">
        <label for="kelas">Kelas:</label>
        <input type="text" class="form-control" name="kelas" value="{{ $siswa->kelas }}" />
    </div>
    <div class="form-group mb-3">
        <label for="jurusan">Jurusan:</label>
<select name="jurusan" id="jurusan">
    <option value="{{ $siswa->jurusan }}">{{ $siswa->jurusan }}</option>
    <option value="TKJ">TKJ</option>
    <option value="RPL">RPL</option>
    <option value="DMM">DMM</option>
</select>

    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    
</form>
<form method="post" action="{{ url('edit', $siswa->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>


@endsection