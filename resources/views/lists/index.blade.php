@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
<div class="row">
    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{url('/')}}">
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
    <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <table class="table rounded-1">
            <thead class="text-center">
                <tr class="judul rounded-1">
                    <th class="text-start">Nomer</th>
                    <th class="text-start">Student Name</th>
                    <th class="text-start">Class</th>
                    <th class="text-start">Major</th>
                    <th class="text-center">...</th>
                </tr>
            </thead>
            <tbody>
                @php($number = 1)
                @foreach ($siswa as $s)
                    <tr class="siswa text-center">
                        <td class="text-start w-25">{{ $number }}</td>
                        <td class="text-start w-25">{{ $s->nama }}</td>
                        <td class="text-start w-25">{{ $s->kelas }}</td>
                        <td class="text-start w-25">{{ $s->jurusan }}</td>
                        <td class="edit text-end">
                            <a href="{{ url('/edit/' . $s->id) }}" class="btn btn-sm btn-outline-light px-3">Edit</a>
                        </td>
                    </tr>
                    @php($number++)
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end mb-5 pb-2">
            <a href="{{ url('add') }}" class="btn btn-primary btn-sm" >+ Nambah Siswa</a>
        </div>
</div>

@endsection
