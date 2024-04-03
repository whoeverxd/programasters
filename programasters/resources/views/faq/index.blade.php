@extends('layouts.secondary')

@section('titulo')
    FAQ
@endsection


@section('content')
    <main>
        @include('faq.section-1')
        @include('faq.section-2')
        @include('faq.section-3')
    </main>
@endsection

@section('scripts')
    @include('faq.scripts')
@endsection

@section('styles')
@endsection