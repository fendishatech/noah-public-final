@extends('master.layout')

@section('page_title')
    Memeber Dashboard
@endsection

@section('content')
    <div class="container mx-auto my-10 px-6">
        {{-- Greeting & Loan Calculator --}}
        @include('members.partials.header')
        {{-- Remaining Balance --}}
        @include('members.partials.remaining-balance')
        {{-- Lots --}}
        @include('members.partials.lots')
        {{-- Loan Status --}}
        @include('members.partials.loan')
        {{-- Upcoming Payments --}}
        @include('members.partials.payments')
    </div>
@endsection
