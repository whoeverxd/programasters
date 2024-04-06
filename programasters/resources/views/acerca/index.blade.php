@extends('layouts.secondary')

@section('titulo')
    Sobre Nosotros
@endsection


@section('content')
    <main>
        @include('acerca.section-1')
        @include('acerca.section-2')
        @include('acerca.section-3')
        @include('acerca.section-4')
        @include('acerca.section-5')
        @include('acerca.section-6')
        @include('templates.third-end')
    </main>
@endsection

@section('scripts')
    @include('blog.scripts')
@endsection

@section('styles')
@endsection