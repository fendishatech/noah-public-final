@extends('master.layout')

@section('page_title')
    Memeber Dashboard
@endsection

@section('content')
    <div class="container mx-auto mt-10 px-6">
        {{-- Greeting & Loan Calculator --}}
        @include('members.partials.header')
        {{-- Remaining Balance --}}
        {{-- Lots --}}
        {{-- Loan Status --}}
        {{-- Upcoming Payments --}}
    </div>
@endsection
