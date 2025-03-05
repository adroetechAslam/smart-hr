@extends('layouts.app')

@section('content')
    <h1 class="text-center m-4 p-4">{{Auth::user()->role}} Dashboard</h1>
@endsection