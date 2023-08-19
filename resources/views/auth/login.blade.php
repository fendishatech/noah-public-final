@extends('auth.layout')

@section('page_title')
    Login
@endsection

@section('content')
    <div class="w-full px-6 sm:px-0 h-screen flex items-center justify-center bg-slate-100">
        <form class="w-full md:w-1/3 rounded-lg bg-white" action={{ url('/login') }} method="POST">
            @csrf
            <div class="flex font-bold flex-col items-center justify-center mt-6">
                <img class="h-18 w-38 mb-3" src="/images/logo/noah-logo.png" />
                <p class="my-4 hiwua text-2xl font-thin text-green-800">
                    ኖህ የማይክሮ ፋይናንስና የብድር ተቋም
                </p>
            </div>
            @if ($errors->has('custom_error'))
                <p class="py-2 text-sm text-red-400 text-center">
                    {{ $errors->first('custom_error') }}
                </p>
            @endif
            {{-- Phone No --}}
            <div class="px-12 pb-10">
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
                {{-- Password --}}
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="password" name="password" placeholder="የይለፍ ቃል"
                            class="w-full border rounded-md px-3 py-2 text-gray-700 focus:outline-yellow-700" />
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-sm text-red-400">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <button type="submit"
                    class="zelan text-2xl font-thin w-full py-2 mt-8 rounded-full bg-green-800 text-gray-100 focus:outline-none">
                    ግባ
                </button>
                <p class="mt-4 hiwua text-md text-center font-thin text-gray-600">
                    ከዚህ በፊት የከፈቱት አካውንት ከሌለዎት
                    <a href="{{ url('/register') }}" class="text-xl text-green-800">በዚህ ይመዝገቡ</a>።
                </p>
            </div>
        </form>
    </div>
@endsection
