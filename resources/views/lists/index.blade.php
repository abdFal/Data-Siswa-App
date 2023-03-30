@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
    <table class="table rounded-1">
    <thead class="text-center">
      <tr class="judul">
        <th class="text-start">Nomer</th>
        <th class="text-start">Student Name</th>
        <th class="text-start">Class</th>
        <th class="text-start">Major</th>
        <th class="text-center">...</th>
      </tr>
    </thead>
    <tbody>
      @php($number = 1)
    @foreach ($siswas as $s)
        <tr class="text-center">
            <td class="text-start w-25">{{ $number }}</td>
            <td class="text-start w-25">{{ $s->nama }}</td>
            <td class="text-start w-25">{{ $s->kelas }}</td>
            <td class="text-start w-25">{{ $s->jurusan }}</td>
            <td class="text-end">
                <a href="{{ url('/edit/' . $s->id) }}" class="btn btn-sm btn-outline-light">Pengen Edit</a>
            </td>
        </tr>
      @php($number++)
    @endforeach
</tbody>

  </table>
  <div class="d-flex justify-content-end mb-5 pb-2">
    <a href="{{ url('add') }}" class="btn btn-primary btn-sm" >+ Nambah Siswa</a>
  </div>
@endsection


