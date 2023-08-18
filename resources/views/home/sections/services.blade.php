<?php
$services = [
    [
        'title' => 'Track company-wide progress',
        'description' => 'See how your day-to-day tasks fit into the wider vision. Go from tracking progress at the milestone level all the way down to the smallest of details. Never lose sight of the bigger picture again.',
    ],
    [
        'title' => 'Collaborate on shared tasks',
        'description' => 'Stay in sync with your team and never miss a beat. Collaborate on tasks and projects seamlessly with your team members, whether you’re in the same office or working remotely.',
    ],
    [
        'title' => 'Integrations with your favorite tools',
        'description' => 'Connect your favorite tools and apps to streamline your workflow and get more done. From project management to communication, we’ve got you covered.',
    ],
];
?>

<!-- Services -->
<section id="features">
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
                                    <h3 class="md:hidden text-base font-bold md:mb-4">
                                        {{ $service['title'] }}
                                    </h3>
                                </div>
                            </div>
                            <div class="">
                                <h3 class="hidden md:block mb-4 text-lg font-bold">
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
    </div>
</section>
<!-- Services -->
