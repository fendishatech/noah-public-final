<div class="mt-8 p-2 bg-gradient-to-r from-gray-500 to-gray-700 shadow-lg rounded-lg  text-yellow-500 hiwua">

    @if ($loans && $payments)
        <div class="p-6 rounded-lg border-2 border-yellow-500">
            <h2 class="text-4xl font-thin text-center">የመጨረሻዎቹ ክፍያዎች</h2>
            <hr class="border-t border-yellow-500 my-4">
            <div class="flex justify-between items-center">
                <p class="text-3xl font-thin mt-2">የብድር ክፍያ</p>
                <p class="text-3xl font-bold mt-2">{{ $loans[0]['last_payment_date'] }}</p>
            </div>
            <div class="flex justify-between items-center">
                <p class="text-3xl font-thin mt-2">የመደበኛ ቁጠባ</p>
                <p class="text-3xl font-bold mt-2">{{ $payments['payment_date'] }}</p>
            </div>
        </div>
    @else
        <div class="flex flex-col md:flex-row justify-center items-center">
            <p class="text-3xl text-center text-yellow-500 font-thin mt-2">የክፍያ መረጃ የለም !</p>
        </div>
    @endif
</div>
