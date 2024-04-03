@extends('layouts.secondary')

@section('titulo')
    Testimonios
@endsection


@section('content')
    <main>
        @include('testimonios.section-1')
        @include('testimonios.section-2')
        @include('testimonios.section-3')
        @include('testimonios.section-4')
    </main>
@endsection

@section('scripts')
    @include('testimonios.scripts')
@endsection

@section('styles')
@endsection