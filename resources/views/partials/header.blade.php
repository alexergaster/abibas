<header
    class="fixed top-0 left-0 w-full z-50 flex items-center justify-between py-4 px-8 bg-white transition-all duration-300">
    <div class="flex items-center">
        <a href="{{ route('home') }}">
            <img alt="Brand logo" class="h-12" src="{{ asset('storage/images/misc/logo.png') }}"/>
        </a>
    </div>
    <div class="flex space-x-4 text-sm font-semibold">
        <a href="{{ route('products.index', ['gender' => '1']) }}" class="text-black">
            ЧОЛОВІКИ
        </a>

        <a class="text-black" href="{{ route('products.index', ['gender' => '2']) }}">
            ЖІНКИ
        </a>
        <a class="text-red-500" href="{{ route('products.index') }}">
            SNEAKERS DAY -30%
        </a>
        <a class="text-black" href="{{ route('products.index', ['gender' => '3']) }}">
            ДІТИ
        </a>
        <a class="text-black" href="{{ route('products.index', ['is_new' => '1']) }}">
            НОВИНКИ
        </a>
    </div>
    <div class="flex items-center space-x-4">
        <div class="relative">
            <input class="border rounded text-sm p-2" placeholder="Пошук" type="text" id="search"/>
            <button class="text-black absolute top-1.5 right-2" id="searchButton">
                <i class="fas fa-search">
                </i>
            </button>
        </div>
        <a class="text-black" href="#">
            <i class="fas fa-heart">
            </i>
        </a>
        <a class="text-black" href="#">
            <i class="fas fa-shopping-bag">
            </i>
        </a>
    </div>
</header>

@section('script')
    <script>
        const header = document.getElementsByTagName('header')[0];

        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.classList.remove('py-4');
            } else {
                header.classList.add('py-4');
            }
        });


        const searchButton = document.getElementById('searchButton')


        searchButton.addEventListener('click', (event) => {
            event.preventDefault();

            const searchInput = document.getElementById('search')

            if (searchInput.value) {
                window.location.href = `${window.location.origin}/products?search=${searchInput.value}`
            }
        })
    </script>
@endsection
