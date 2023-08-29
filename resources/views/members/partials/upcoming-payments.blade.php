<div class="mt-8 p-2 bg-white shadow-lg rounded-lg  text-yellow-700 hiwua">
    @if ($loans)
        <div class="p-6 rounded-lg border-2 border-yellow-700">
            <h2 class="text-4xl font-thin text-center">ቀጣይ ክፍያዎች</h2>
            <hr class="border-t border-yellow-700 my-4">
            <div class="flex justify-between items-center">
                <p class="text-3xl font-thin mt-2">የብድር ክፍያ</p>
                <p class="text-3xl font-bold mt-2">{{ $loans[0]['next_payment_due'] }}</p>
            </div>
            <div class="flex justify-between items-center">
                <p class="text-3xl font-thin mt-2">ወርሃዊ ቁጠባ</p>
                <p class="text-3xl font-bold mt-2">{{ $loans[0]['next_payment_due'] }}</p>
            </div>
        </div>
    @else
        <div class="flex flex-col md:flex-row justify-center items-center">
            <p class="text-3xl text-center text-yellow-500 font-thin mt-2">የቁጠባ መረጃ የለም !</p>
        </div>
    @endif
</div>
