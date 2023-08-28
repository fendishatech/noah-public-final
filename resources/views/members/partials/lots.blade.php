<div class="p-2 bg-gradient-to-r from-gray-700 to-gray-600 shadow-lg rounded-lg  text-yellow-500 hiwua">
    <div class="p-6 rounded-lg border-2 border-yellow-500">
        <h2 class="text-4xl font-thin text-center">የሼር እጣዎች</h2>
        <hr class="border-t border-yellow-500 my-4">
        <div class="flex justify-between items-center">
            <p class="text-3xl font-thin mt-2">አጠቃላይ እጣዎች</p>
            <p class="text-3xl font-bold mt-2">{{ $lot->total }}</p>
        </div>
        <div class="flex justify-between items-center">
            <p class="text-3xl font-thin mt-2">ቃል የተገቡ እጣዎች</p>
            <p class="text-3xl font-bold mt-2">{{ $lot->promised }}</p>
        </div>
    </div>
</div>
