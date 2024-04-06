@extends('layouts.secondary')

@section('titulo')
    Contacto
@endsection


@section('content')
    <main>
        @include('contacto.section-1')
        @include('contacto.section-2')
        @include('contacto.section-3')
        @include('templates.first-end')
    </main>
@endsection

@section('scripts')
    @include('contacto.scripts')
@endsection

@section('styles')
@endsection