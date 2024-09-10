@extends('layout')

@section('title', 'Home Page')

@section('header', 'Home Page Header')

@section('content')
    <h2>This is the home page</h2>

    {{-- Use the Blade component --}}
    <x-alert type="success" message="This is a success message!" />
    <x-alert type="danger" message="This is a danger message!" />
@endsection
