@extends('layouts.secondary')

@section('titulo')
    Equipo
@endsection


@section('content')
    <main>
        @include('equipo.section-1')
        @include('equipo.section-2')
        @include('templates.second-end')
    </main>
@endsection

@section('scripts')
    @include('equipo.scripts')
@endsection

@section('styles')
@endsection