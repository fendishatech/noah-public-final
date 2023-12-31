<!-- Footer -->
<footer class="bg-veryDarkBlue">
    <div class="container mx-auto px-6 py-10 flex flex-col-reverse md:flex-row justify-between space-y-8 md:space-y-0">
        <!-- Logo and social -->
        <div
            class="flex flex-col-reverse md:flex-col items-center md:items-start justify-center space-y-12 md:space-y-4">
            <div class="mx-auto my-6 text-center text-green-600 md:hidden">
                Copyright &copy; 2023, All rights reserved.
            </div>
            <!-- Logo -->
            <img src="/images/logo/noah-logo-dark.jpg" class="w-36 h-12" alt="" />
            <!-- Social -->
            <div class="flex justify-center space-x-4">
                <!-- Link 1 -->
                <a href="https://www.facebook.com/profile.php?id=100090650977088">
                    <img src="/images/social/facebook.svg" alt="" class="h-8 hover:text-brightRed" />
                </a>
                <!-- Link 2 -->
                <a href="https://www.youtube.com/@NoahSCOOP">
                    <img src="/images/social/youtube.svg" alt="" class="h-8" />
                </a>
                <!-- Link 3 -->
                <a href="https://t.me/noahsacoop">
                    <img src="/images/social/telegram.svg" alt="" class="h-8" />
                </a>
                <!-- Link 4 -->
                <a href="https://www.linkedin.com/in/noah-sac-coop">
                    <img src="/images/social/linkedin.svg" alt="" class="h-8" />
                </a>
                <!-- Link 5 -->
                <a href="#">
                    <img src="/images/social/instagram.svg" alt="" class="h-8" />
                </a>
            </div>
        </div>
        <!-- Logo and social -->

        <!-- Links -->
        <div class="flex justify-around space-x-32 ">
            <div class="flex flex-col space-y-3 text-green-600 text-xl zelan">
                <a href="/" class="hover:text-brightRed">ዋና ገጽ</a>
                <a href="{{ route('home') }}#about" class="hover:text-brightRed">ስለ ኖህ</a>
                <a href="{{ route('home') }}#services" class="hover:text-brightRed">አገልግሎቶቻችን</a>
                <a href="{{ route('home') }}#contact" class="hover:text-brightRed">ያግኙን</a>
            </div>
        </div>
        <!-- Links -->

        <!-- Input Container -->
        <div class="flex flex-col justify-between">

            <div class="hidden md:block text-green-600">
                Copyright &copy; 2023, All rights reserved.
            </div>
        </div>
        <!-- Input Container -->
    </div>
</footer>
<!-- Footer -->
