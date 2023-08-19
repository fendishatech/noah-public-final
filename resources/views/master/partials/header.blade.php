<header class="">
    <!-- Navbar -->
    <nav class="container mx-auto p-6 relative">
        <div class="flex items-center justify-between">
            <!-- logo -->
            <div class="pt-2">
                <a href="/"><img class="-mt-6 w-36 sm:w-48 h-16" src="/images/logo/noah-logo.png"
                        alt="Logo" /></a>
            </div>
            <!-- links -->
            <div class="hidden sm:text-sm md:text-xl md:flex space-x-6  text-yellow-700 zelan">
                <a href="/" class="hover:text-yellow-600">ዋና ግጽ</a>
                <a href="{{ route('home') }}#about" class="hover:text-yellow-600">ስለ ኖህ</a>
                <a href="/services" class="hover:text-yellow-600">አገልግሎቶቻችን</a>
                <a href="{{ route('home') }}#contact" class="hover:text-yellow-600">ያግኙን</a>
            </div>
            <!-- cta -->
            @if (Session::has('member'))
                <div class="flex space-x-2 text-2xl zelan">
                    <a href="/dashboard"
                        class="hidden md:block p-3 px-6  text-white bg-green-600 rounded-full baseline hover:bg-green-800">ዳሽቦርድ</a>
                    <a href="/logout"
                        class="hidden md:block p-3 px-6  text-white bg-green-600 rounded-full baseline hover:bg-green-800">ውጣ</a>
                </div>
            @else
                <div class="flex space-x-2 text-2xl zelan">
                    <a href="/register"
                        class="hidden md:block p-3 px-6 text-white bg-red-600 rounded-full baseline hover:bg-red-800 zelan items-center">አሁኑኑ
                        ይመዝገቡ</a>
                    <a href="/login"
                        class="hidden md:block p-3 px-6  text-white bg-green-600 rounded-full baseline hover:bg-green-800">ግባ</a>
                </div>
            @endif

            <!-- Hamburger Icon -->
            <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>
            <!-- Hamburger Icon -->
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden">
            <div id="menu"
                class="hidden z-50 absolute flex-col items-center self-end py-8 mt-10 space-y-6  bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-xl text-2xl text-yellow-800 zelan">
                <a href="/" class="hover:text-yellow-600">ዋና ግጽ</a>
                <a href="{{ route('home') }}#about" class="hover:text-yellow-600">ስለ ኖህ</a>
                <a href="/services" class="hover:text-yellow-600">አገልግሎቶቻችን</a>
                <a href="{{ route('home') }}#contact" class="hover:text-yellow-600">ያግኙን</a>

                <!-- cta -->
                <x-cta-button text="አሁኑኑ ይመዝገቡ"></x-cta-button>
                <a href="/login"
                    class=" md:block p-3 px-8  text-white bg-green-600 rounded-full baseline hover:bg-green-800">ግባ</a>
            </div>
        </div>
        <!-- Mobile Menu -->
    </nav>
    <!-- Navbar -->
</header>
