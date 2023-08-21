<?php
$services = [
    [
        'title' => 'መደበኛ ቁጠባ',
        'description' => 'በየወሩ በተከታታይ የሚቆጠብ።',
    ],
    [
        'title' => 'የፈቃደኝነት ቁጠባ',
        'description' => 'ይህ የቁጠባ አባላት በፈቃደኝነት የሚቆጥቡት ሆኖ አስፈላጊ ሲሆን አውጥተው መጠቀም የሚችሉት የቁጠባ አይነት ነው።',
    ],
    [
        'title' => 'ልዩ ቁጠባ',
        'description' => 'ይህ የቁጠባ አይነት ለህጻናት ፣ ለሴቶች ፣ ለመምህራን እና ለጤና ባለሙያዎች በተሻለ ወለድ የቀረበ የቁጠባ አይነት ነው።',
    ],
    [
        'title' => 'የጊዜ ገደብ ተቀማጭ',
        'description' => 'በከፍተኛ ወለድ ከማህበሩ ጋር የጊዜ ገደብ ስምምነት ውል በማድረግ የሚቀመጥ የተቀማጭ አይነት ነው።',
    ],
];

$loanServices = [
    [
        'title' => 'ለማህበራዊ አገልግሎት',
        'services' => ['ለሰርግ ፣ ለአዲስ ጎጆ ወጪዎች የቤት እቃ ማሟያ', 'ለትምህርት ፣ ለአመታዊ የትምህርት ክፍያ እንዲሁም የተለያዩ የትምህርት ክፍያ ፕሮግራሞች', 'ለክርስትና ፣ ለሃዘን እንዲሁም ለተለያዪ ድንገተኛ ወጪዎች'],
    ],
    [
        'title' => 'ለንግድ',
        'services' => ['አዲስ ንግድ ለመጀመር', 'ንግድን ለማስፋፋት', 'ለንግድ ገቢዎች ታክስ ክፍያ', 'ለቤትና ለመኪና ግዢ ወይም እድሳት', 'ለመኪና ባለቤቶች የኢንሹራንስ ክፍያ'],
    ],
];
?>

<!-- Services -->
<section id="services">
    <x-section-title title="አገልግሎቶቻችን" />
    {{-- Saving Services --}}
    <div class="container mx-auto mt-10 flex flex-col md:flex-row px-4 space-y-12 md:space-y-0">
        <!-- Service Title -->
        <div class="md:w-1/2 flex flex-col space-y-12">
            <h2 class="max-w-md text-4xl font-bold text-center md:text-left hiwua text-yellow-600">
                ኖህ የሚሰጣቸው የተለያዩ የቁጠባ አገልግሎቶች
            </h2>
            <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">

            </p>
        </div>
        <!-- Numbered List -->
        <div class="md:w-1/2 flex flex-col space-y-8">
            <!-- List items -->
            <ul>
                @foreach ($services as $key => $service)
                    <li class="mt-4">
                        <div class="flex md:flex-row flex-col space-y-3 md:space-y-0 md:space-x-6">
                            {{-- heading --}}
                            <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
                                <div class="flex items-center space-x-2">
                                    <div class="px-4 py-2 md:py-1 bg-red-600 text-white rounded-full">
                                        {{ $key + 1 }}
                                    </div>
                                    <h3 class="md:hidden  text-xl font-bold md:mb-4 zelan">
                                        {{ $service['title'] }}
                                    </h3>
                                </div>
                            </div>
                            <div class="">
                                <h3 class="hidden md:block mb-4 text-2xl text-gray-700 font-bold zelan">
                                    {{ $service['title'] }}
                                </h3>
                                <p class="text-darkGrayishBlue">
                                    {{ $service['description'] }}
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        {{-- Know More --}}
    </div>
    {{-- Loan Services --}}
    <div class="container mx-auto mt-10 flex flex-col md:flex-row-reverse px-4 space-y-12 md:space-y-0">
        <!-- Service Title -->
        <div class="md:w-1/2 flex flex-col space-y-12">
            <h2 class="max-w-md text-4xl font-bold text-center md:text-left hiwua text-yellow-600">
                ኖህ የሚሰጣቸው የተለያዩ የብድር አገልግሎቶች
            </h2>
            <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">

            </p>
        </div>
        <!-- Numbered List -->
        <div class="md:w-1/2 flex flex-col space-y-8">
            <!-- List items -->
            <ul>
                @foreach ($loanServices as $key => $loan)
                    <li class="mt-4">
                        <div class="flex md:flex-row flex-col space-y-3 md:space-y-0 md:space-x-6">
                            {{-- heading --}}
                            <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
                                <div class="flex items-center space-x-2">
                                    <div class="px-4 py-2 md:py-1 bg-red-600 text-white rounded-full">
                                        {{ $key + 1 }}
                                    </div>
                                    <h3 class="md:hidden  text-xl font-bold md:mb-4 zelan">
                                        {{ $loan['title'] }}
                                    </h3>
                                </div>
                            </div>
                            <div class="">
                                <h3 class="hidden md:block mb-4 text-2xl text-gray-700 font-bold zelan">
                                    {{ $loan['title'] }}
                                </h3>
                                <ul class="list-disc text-red-600 text-lg">
                                    @foreach ($loan['services'] as $service)
                                        <li><span class="text-darkGrayishBlue">{{ $service }}</span> </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        {{-- Know More --}}
    </div>

    <div class="container mx-auto">
        <a href="/services"
            class="p-3 px-6 w-[200px] flex justify-center rounded-full mx-auto mt-20 text-white bg-red-500 border-0 focus:outline-none hover:bg-red-600 text-lg hiwua">የበለጠ
            ለማወቅ >>></a>
    </div>
</section>
<!-- Services -->
