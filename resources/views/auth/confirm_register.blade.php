@extends('master.layout')

@section('page_title')
    Confirmation
@endsection


@section('content')
    <div class="container mx-auto px-6 py-8 flex flex-col md:flex-row space-x-10 zelan">
        {{-- Left --}}
        <div class="md:w-1/2 flex flex-col items-center justify-center">
            <div class="flex font-bold justify-center mt-6">
                <img class="h-20 w-60 mb-3" src="images/logo/noah-logo.png" />
            </div>
            <p class="mt-6 text-4xl text-center text-gray-500 mb-8">
                እንኳን ወደ
                <a href="/" class="text-green-700">ኖህ</a>
                የቁጠባና የብድር አገልግሎት መጡ ።
            </p>

        </div>
        {{-- Right --}}
        <div class="md:w-1/2">
            <p class="mt-6 text-xl text-center text-gray-700 mb-8">
                ኦንላይን ምዝገባዎ ተሳክቷል ፣ የአባልነት ክፍያዎች
            </p>
            <ul class="flex flex-col space-y-4">
                <li class="flex space-x-3 items-center">
                    <svg class="flex-shrink-0 w-8 h-8 text-green-600 dark:text-green-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="text-xl font-normal leading-tight text-gray-700 dark:text-gray-700">የምዝገባ ክፍያ:
                        {{ $client_payments->registration }} ብር</span>
                </li>

                <li class="flex space-x-3 items-center">
                    <svg class="flex-shrink-0 w-8 h-8 text-green-600 dark:text-green-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="text-xl font-normal leading-tight text-gray-700 dark:text-gray-700">መደበኛ ቁጠባ:
                        {{ $client_payments->monthly_saving }} ብር</span>
                </li>

                <li class="flex space-x-3 items-center">
                    <svg class="flex-shrink-0 w-8 h-8 text-green-600 dark:text-green-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="text-xl font-normal leading-tight text-gray-700 dark:text-gray-700">መነሻ የአባልነት ሼር
                        ({{ $client_payments->lots }} እጣ):
                        {{ $client_payments->basic_lots }} ብር</span>
                </li>

                <li class="flex space-x-3 items-center">
                    <svg class="flex-shrink-0 w-8 h-8 text-green-600 dark:text-green-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="text-xl font-normal leading-tight text-gray-700 dark:text-gray-700">የአባልነት ድብተር:
                        {{ $client_payments->member_card }} ብር</span>
                </li>


                <li class="my-5">
                    <span class="text-5xl text-veryDarkBlue font-extrabold tracking-tight">
                        አጠቃላይ
                        {{ $client_payments->monthly_saving + $client_payments->registration + $client_payments->basic_lots + $client_payments->member_card }}
                        ብር
                    </span>
                </li>
            </ul>

            <p class="mt-6 text-xl text-center text-gray-700 mb-8">
                በመክፈል የከፈሉበትን ደረሰኝ ወይም የትራንዛክሽን ቁጥር ከታች ባሉት አማራጮች በአንዱ በመላክ ክፍያዎን ያረጋግጡ።
            </p>
            <div class="mt-4 px-12 pb-4 flex justify-center items-center gap-6">
                <a href="https://t.me/noahsacoop" class="px-4 py-2 text-2xl bg-green-700 rounded-md text-white">ቴሌግራም</a>
                <a href="mailto:support@noahcoop.com" class="px-4 py-2 text-2xl bg-green-700 rounded-md text-white">ኢሜል</a>
            </div>


        </div>
    </div>
@endsection
