<header
    class="fixed top-0 left-0 w-full z-50 flex items-center justify-between py-4 px-8 bg-white transition-all duration-300">
    <div class="flex items-center">
        <a href="{{ route('home') }}">
            <img alt="Brand logo" class="h-12" src="{{ asset('storage/images/misc/logo.png') }}"/>
        </a>
    </div>
    <div class="flex space-x-4 text-sm font-semibold">
        <a href="#" class="text-black {{ Request::is('/') ? 'border-b-2 border-black' : '' }}">
            ЧОЛОВІКИ
        </a>

        <a class="text-black" href="#">
            ЖІНКИ
        </a>
        <a class="text-red-500" href="#">
            SNEAKERS DAY -30%
        </a>
        <a class="text-black" href="#">
            ДІТИ
        </a>
        <a class="text-black" href="#">
            НОВИНКИ
        </a>
    </div>
    <div class="flex items-center space-x-4">
        <div class="relative">
            <input class="border rounded text-sm p-2" placeholder="Пошук" type="text"/>
            <a class="text-black absolute top-1.5 right-2" href="#">
                <i class="fas fa-search">
                </i>
            </a>
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
    </script>
@endsection
