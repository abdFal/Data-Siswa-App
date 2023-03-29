@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
    <table class="table">
    <thead class="text-center">
      <tr>
        <th class="text-start">ID Number</th>
        <th class="text-start">Student Name</th>
        <th>Class</th>
        <th class="text-end">Act</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($siswas as $s)
        <tr class="text-center">
            <td class="text-start">{{ $s->id }}</td>
            <td class="text-start">{{ $s->nama }}</td>
            <td>{{ $s->kelas }}</td>
            <td class="text-end">
                <a href="{{ url('/edit/' . $s->id) }}" class="btn btn-sm btn-outline-danger">Edit</a>
            </td>
        </tr>
    @endforeach
</tbody>

  </table>
  <div class="d-flex justify-content-end mb-5 pb-2">
    <a href="{{ url('add') }}" class="btn btn-primary" >+ Add Siswa</a>
  </div>
@endsection


