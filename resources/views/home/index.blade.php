@extends('master.layout')

@section('page_itle')
    Home
@endsection

@section('content')
    @include('home.sections.hero')
    @include('home.sections.cta')
    @include('home.sections.services')
    @include('home.sections.about')
    @include('home.sections.contact')
    @include('home.sections.staff')
@endsection
