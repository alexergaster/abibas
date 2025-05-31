<header
    class="fixed top-0 left-0 w-full z-50 flex items-center justify-between py-4 px-6 md:px-8 bg-white transition-all duration-300 shadow">
    <!-- Logo -->
    <div class="flex items-center">
        <a href="{{ route('home') }}">
            <img alt="Brand logo" class="h-10 md:h-12" src="{{ asset('storage/images/misc/logo.png') }}"/>
        </a>
    </div>

    <!-- Burger Button (Mobile) -->
    <button id="burgerBtn" class="md:hidden text-black text-2xl focus:outline-none">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Main Nav -->
    <nav id="mainNav"
         class="hidden absolute top-full left-0 w-full bg-white flex-col items-center space-y-4 py-4 md:flex md:static md:flex-row md:space-y-0 md:space-x-6 md:w-auto md:py-0">
        <a href="{{ route('products.index', ['gender' => '1']) }}" class="text-black text-sm font-semibold">ЧОЛОВІКИ</a>
        <a href="{{ route('products.index', ['gender' => '2']) }}" class="text-black text-sm font-semibold">ЖІНКИ</a>
        <a href="{{ route('products.index') }}" class="text-red-500 text-sm font-semibold">SNEAKERS DAY -30%</a>
        <a href="{{ route('products.index', ['gender' => '3']) }}" class="text-black text-sm font-semibold">ДІТИ</a>
        <a href="{{ route('products.index', ['is_new' => '1']) }}" class="text-black text-sm font-semibold">НОВИНКИ</a>
    </nav>

    <!-- Right Side Icons -->
    <div class="hidden md:flex items-center space-x-4">
        <div class="relative">
            <input class="border rounded text-sm p-2 pr-8" placeholder="Пошук" type="text" id="search"/>
            <button class="text-black absolute top-1.5 right-2" id="searchButton">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <a class="text-black" href="{{ route('likes') }}">
            <i class="fas fa-heart"></i>
        </a>
        {{-- <a class="text-black" href="#"><i class="fas fa-shopping-bag"></i></a> --}}
    </div>
</header>

@section('script')
    <script>

    </script>
@endsection
