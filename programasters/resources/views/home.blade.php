@extends('layouts.main')

@section('titulo')
    Soluciones digitales
@endsection


@section('content')
    <main>
        @include('home.section-1')
        @include('home.section-2')
        @include('home.section-3')
        @include('home.section-12')
        @include('templates.first-end')
    </main>
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection