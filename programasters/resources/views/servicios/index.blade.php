@extends('layouts.secondary')

@section('titulo')
    Servicios
@endsection


@section('content')
    <main>
        @include('servicios.section-1')
        @include('servicios.section-2')
        @include('servicios.section-3')
        @include('servicios.section-4')
        @include('templates.second-end')
    </main>
@endsection

@section('scripts')
    @include('servicios.scripts')
@endsection

@section('styles')
@endsection