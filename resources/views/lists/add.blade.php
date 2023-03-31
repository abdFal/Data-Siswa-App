@extends('layouts.app')
@section('title', 'Create')
@section('content')
<form action="{{ url('add') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
        @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="kelas">Kelas:</label>
        <input type="number" name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror" value="{{ old('kelas') }}" required>
        @error('kelas')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="jurusan">Jurusan:</label>
            <select class="rounded-3 px-3 py-1 text-start" name="jurusan" id="jurusan">
                <option value="RPL">RPL</option>
                <option value="DMM">DMM</option>
                <option value="TKJ">TKJ</option>
                <option value="KGSP">KGSP</option>
            </select>   
    </div>
    <button type="submit" class="btn btn-sm btn-primary">Save</button>
</form>
<a class="text-small" href="{{url('/')}}">Back</a>
@endsection