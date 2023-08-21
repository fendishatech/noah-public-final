@php
    $phoneNumbers = ['011-6-686650', '09-29-534515', '09-29-559993'];
@endphp



<section id="contact" class=" relative">
    <div class="conatiner mx-auto px-6">
        <x-section-title title="በዚህ ያግኙን" />
    </div>
    <div class="container mx-auto mt-10 mb-10 px-6 flex flex-col-reverse md:flex-row items-center space-y-0">
        {{-- Left --}}
        <div class="md:w-1/2">
            <div class="flex flex-col mt-6">
                <h2 class="text-4xl text-green-800 hiwua">ይደውሉልን</h2>
                @foreach ($phoneNumbers as $phone)
                    <div class="mt-4 flex items-center space-x-4">
                        <div class="p-2 rounded-lg border-2 border-green-600">
                            <img src="/images/phone.svg" alt="Phone Icon" class="h-8">
                        </div>
                        <p class="text-green-600 text-xl font-semibold">{{ $phone }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Right --}}
        <div class="md:w-1/2">
            <h2 class="text-4xl text-center md:text-left text-green-800 hiwua">ዋና መስሪያቤት</h2>
            <p class="text-xl text-center md:text-left text-green-800">መገናኛ ፣ ማራቶን ህንጻ 6ተኛ ፎቅ</p>
            <img src="images/marathon-building.jpg" alt="Marathon Building">
        </div>
    </div>

    <div class="relative">
        <div class="absolute inset-0 bg-gray-300">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15762.114255268005!2d38.780437122182356!3d9.01545239950584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b853553ef08e5%3A0xf0d4e8a6f4a4a4a0!2zTWFyYXRob24gTWFsbCB8IE1lZ2VuYWduYSB8IOGIm-GIq-GJtuGKlSDhiJ7hiI0gfCDhiJjhjIjhipPhips!5e0!3m2!1sen!2set!4v1692452431446!5m2!1sen!2set"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <form action="mailto:info@noahcoop.com" method="post" enctype="text/plain"
                class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-xl mb-1 font-medium title-font">ለሃሳብና ተጨማሪ አስተያየትዎ ይጻፉልን</h2>

                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">ኢሜል</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">መልእክት</label>
                    <textarea id="message" name="message"
                        class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button
                    class="text-white bg-yellow-600 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-800 rounded text-xl zelan">መልእክቱን
                    ላክ</button>
            </form>

        </div>
    </div>
</section>
