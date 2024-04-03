@extends('layouts.secondary')

@section('titulo')
    Blog
@endsection


@section('content')
    <main>
        @include('blog.section-1')
        @include('blog.section-2')
        @include('blog.section-3')
        @include('blog.section-4')
    </main>
@endsection

@section('scripts')
    @include('blog.scripts')
@endsection

@section('styles')
@endsection