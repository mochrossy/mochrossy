@extends('layouts.app')

@section('title', 'Portofolio & Blog Saya')

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.services')
    @include('partials.portfolio')
    @include('partials.clients')
    @include('partials.work')
    @include('partials.statistics')
    @include('partials.blog')
    @include('partials.contact')
    @include('partials.cta')
@endsection