<div class="my-8 p-2 bg-white shadow-lg rounded-lg text-yellow-700 hiwua">
    <div class="p-6 rounded-lg border-2 border-yellow-700">
        <h2 class="text-4xl font-thin text-center">ቀሪ ሂሳብ</h2>
        <hr class="border-t border-yellow-700 my-4">
        @if ($savings)

            @foreach ($savings as $account)
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex flex-col items-center space-x-0 md:space-x-4 space-y-2 md:space-y-0">
                        <p class="text-3xl font-thin mt-2">በአካውንት ቁጥር</p>
                        <p class="text-3xl font-thin mt-2">{{ $account->account_number }}</p>
                    </div>
                    <p class="text-3xl font-boldn font-Titillium mt-2"> {{ $account->balance }} ብር</p>
                </div>
                <hr class="border-t border-yellow-700 my-4">
            @endforeach
        @else
            <div class="flex flex-col md:flex-row justify-center items-center">
                <p class="text-3xl text-center text-yellow-700 font-thin mt-2">ቀሪ ሂሳብ መረጃ የለም !</p>
            </div>
        @endif
    </div>
</div>
