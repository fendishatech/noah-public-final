<div class="my-8 p-2 bg-gradient-to-r from-yellow-700 to-yellow-600 shadow-lg rounded-lg text-white hiwua">
    <div class="p-6 rounded-lg border-2 border-white">
        <h2 class="text-4xl font-thin text-center">ቀሪ ሂሳብ</h2>
        <hr class="border-t border-white my-4">

        @foreach ($savings as $account)
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex flex-col items-center space-x-0 md:space-x-4 space-y-2 md:space-y-0">
                    <p class="text-3xl font-thin mt-2">በአካውንት ቁጥር</p>
                    <p class="text-3xl font-thin mt-2">{{ $account->account_number }}</p>
                </div>
                <p class="text-3xl font-boldn font-Titillium mt-2"> {{ $account->balance }} ብር</p>
            </div>
            <hr class="border-t border-white my-4">
        @endforeach
    </div>
</div>
