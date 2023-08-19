@extends('auth.layout')

@section('page_title')
    Register
@endsection

@section('content')
    <div class="w-full px-6 py-2 sm:px-0 h-screen flex items-center justify-center bg-slate-100">
        <form class="w-full md:w-1/3 rounded-lg bg-white" action={{ url('/register') }} method="POST">
            @csrf
            <div class="flex font-bold flex-col items-center justify-center mt-6">
                <img class="h-18 w-38 mb-3" src="/images/logo/noah-logo.png" />
                <p class="my-4 hiwua text-2xl font-thin text-green-800">
                    ኖህ የቁጠባና የብድር ተቋም
                </p>
            </div>
            <div class="px-12 pb-10">
                {{-- First Name --}}
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="text" name="first_name" placeholder="ስም"
                            class="w-full border rounded-md px-3 py-2 text-gray-700 focus:outline-yellow-700"
                            value="{{ old('first_name') }}" />
                    </div>
                    @if ($errors->has('first_name'))
                        <span class="text-sm text-red-400">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>

                {{-- Father Name --}}
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="text" name="father_name" placeholder="የአባት ስም"
                            class="w-full border rounded-md px-3 py-2 text-gray-700 focus:outline-yellow-700"
                            value="{{ old('father_name') }}" />
                    </div>
                    @if ($errors->has('father_name'))
                        <span class="text-sm text-red-400">{{ $errors->first('father_name') }}</span>
                    @endif
                </div>

                {{-- Phone No --}}
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="tel" name="phone_no" placeholder="ስልክ ቁጥር"
                            class="w-full border rounded-md px-3 py-2 text-gray-700 focus:outline-yellow-700"
                            value="{{ old('phone_no') }}" />
                    </div>
                    @if ($errors->has('phone_no'))
                        <span class="text-sm text-red-400">{{ $errors->first('phone_no') }}</span>
                    @endif
                </div>

                <button type="submit"
                    class="hiwua text-2xl font-thin w-full py-2 mt-8 rounded-full bg-green-800 text-gray-100 focus:outline-none">
                    መዝግብ
                </button>

                <p class="mt-4 hiwua text-md text-center font-thin text-gray-600">
                    ከዚህ በፊት የከፈቱት አካውንት ካለ
                    <a href="{{ url('/login') }}" class="text-xl text-green-800">በዚህ ይግቡ</a>።
                </p>
            </div>
        </form>
    </div>
@endsection
