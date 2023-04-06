@extends('layouts.app')
@section('title', "$jurusan Students")

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
    <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <h2 class="fw-bold">{{$jurusan}} Students</h2>
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
                @foreach ($students as $s)
                    <tr class="text-center">
                        <td class="text-start w-25">{{ $number }}</td>
                        <td class="text-start w-25">{{ $s->nama }}</td>
                        <td class="text-start w-25">{{ $s->kelas }}</td>
                        <td class="text-start w-25">{{ $s->jurusan }}</td>
                                           </tr>
                    @php($number++)
                @endforeach
            </tbody>
        </table>
</div>
@endsection
