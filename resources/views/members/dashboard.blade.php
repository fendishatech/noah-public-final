@extends('master.layout')

@section('page_title')
    Memeber Dashboard
@endsection

@section('content')
    <div class="bg-gray-200">
        <div class="container mx-auto py-10 px-6">
            {{-- Greeting & Loan Calculator --}}
            @include('members.partials.header')
            {{-- Remaining Balance --}}
            @include('members.partials.remaining-balance')
            {{-- Lots --}}
            @include('members.partials.lots')
            {{-- Loan Status --}}
            @include('members.partials.loan')
            {{-- Latest Payments --}}
            @include('members.partials.payments')
            {{-- Upcoming Payments --}}
            @include('members.partials.upcoming-payments')

        </div>
    </div>
@endsection
