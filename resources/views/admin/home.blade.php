@extends('adminlayout')
@section('content')
    <h3>Dashboard</h3> <br>
    Hoşgeldiniz, {{ auth()->user()->name }}
@endsection
