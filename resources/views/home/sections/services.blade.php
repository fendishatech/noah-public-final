<?php
$services = [
    [
        'title' => 'መደበኛ ቁጠባ',
        'description' => 'See how your day-to-day tasks fit into the wider vision. Go from tracking progress at the milestone level all the way down to the smallest of details. Never lose sight of the bigger picture again.',
    ],
    [
        'title' => 'የህጻናት ወርሃዊ ክፍያ ብድርና ቁተባ',
        'description' => 'Stay in sync with your team and never miss a beat. Collaborate on tasks and projects seamlessly with your team members, whether you’re in the same office or working remotely.',
    ],
    [
        'title' => 'የንብረትና የቁሳቁስ ብድርና ቁጠባ',
        'description' => 'Connect your favorite tools and apps to streamline your workflow and get more done. From project management to communication, we’ve got you covered.',
    ],
];
?>

<!-- Services -->
<section id="features">
    <x-section-title title="አገልግሎቶቻችን" />
    <div class="container mx-auto mt-10 flex flex-col md:flex-row px-4 space-y-12 md:space-y-0">
        <!-- Whats different -->
        <div class="md:w-1/2 flex flex-col space-y-12">
            <h2 class="max-w-md text-4xl font-bold text-center md:text-left hiwua text-yellow-600">
                ኖህ የሚሰጣቸው የተለያዩ አገልግሎቶች
            </h2>
            <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                ኖህ የቁጠባና የብድር ተቋም ፤ ይተለያዩ የቁጠባ እና የብድር ፣
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
                                    <h3 class="md:hidden text-base font-bold md:mb-4 zelan">
                                        {{ $service['title'] }}
                                    </h3>
                                </div>
                            </div>
                            <div class="">
                                <h3 class="hidden md:block mb-4 text-lg font-bold zelan">
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

    <div class="container mx-auto">
        <a href="/services"
            class="p-3 px-6 w-[200px] flex justify-center rounded-full mx-auto mt-20 text-white bg-red-500 border-0 focus:outline-none hover:bg-red-600 text-lg hiwua">የበለጠ
            ለማወቅ >>></a>
    </div>
</section>
<!-- Services -->
