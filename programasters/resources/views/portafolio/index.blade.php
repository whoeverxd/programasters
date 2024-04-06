@extends('layouts.secondary')

@section('titulo')
    Portafolio
@endsection


@section('content')
    <main>
        @include('portafolio.section-1')
        @include('portafolio.section-2')
        @include('portafolio.section-3')
        @include('portafolio.section-4')
        @include('templates.second-end')
    </main>
@endsection

@section('scripts')
    @include('portafolio.scripts')
@endsection

@section('styles')
@endsection