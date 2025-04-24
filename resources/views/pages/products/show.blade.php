@extends('layouts.main')

@section('content')
    <section class="container mx-auto p-4 mt-24 flex flex-col md:flex-row md:space-x-6">
        <main class="flex-1 flex flex-col">
            <div class="relative flex justify-center items-center bg-[#e6edea]">
                <button aria-label="Previous"
                        class="absolute left-2 top-1/2 -translate-y-1/2 border border-black rounded-sm w-8 h-8 flex justify-center items-center bg-white hover:bg-gray-100"
                        id="prevBtn">
                    <i class="fas fa-arrow-left text-sm">
                    </i>
                </button>
                <img alt=""
                     class="max-w-full h-auto" height="250" id="slideImage"
                     src="{{ asset('storage/images/products/' . $product->image) }}"
                     width="600"/>
                <button aria-label="Next"
                        class="absolute right-2 top-1/2 -translate-y-1/2 border border-black rounded-sm w-8 h-8 flex justify-center items-center bg-white hover:bg-gray-100"
                        id="nextBtn">
                    <i class="fas fa-arrow-right text-sm">
                    </i>
                </button>
            </div>
            <div class="hidden none all-slides">
                @foreach($productImages as $image)
                    <img src="{{ asset('storage/images/products/' . $image->image) }}" alt="">
                @endforeach
            </div>
            <div
                class="flex justify-center items-center space-x-1 mt-3 text-[10px] font-semibold text-black select-none"
                id="dotsContainer">
                <span class="w-3 h-0.5 bg-black rounded-sm cursor-pointer" data-index="0"></span>
            </div>
        </main>
        <aside
            class="w-full md:w-[320px] flex flex-col text-[10px] md:text-xs text-[#1a1a1a] relative mt-6 md:mt-0">
            <div class="mb-1 text-[10px] text-[#1a1a1a]/70 font-normal">
                Originals
            </div>
            <h1 class="font-extrabold text-[18px] md:text-[20px] leading-tight mb-1">
                {{ $product->name }}
            </h1>
            <div class="font-bold text-2xl mb-2">
                {{ $product->price }} грн.
            </div>

            <div class="text-[16px] md:text-[18px] mb-2">
                <p class=" leading-relaxed">
                    {{ $product->description }}
                </p>
            </div>
            <div class="text-[16px] md:text-[18px] mb-2">
                <p class="leading-relaxed">
                    <span class="font-bold">Колір:</span> {{ $product->color }}
                </p>
            </div>
            <div class="text-[16px] md:text-[18px] mb-2">
                <p class="leading-relaxed">
                   <span class="font-bold">Розмір:</span> {{ $product->size }}
                </p>
            </div>

            <div class="flex items-center gap-4 mt-10">
                <button
                    id="toLike"
                    class="flex items-center justify-center bg-black text-white font-montserrat font-bold text-sm tracking-widest uppercase px-6 py-3 relative"
                    style="letter-spacing: 0.15em;"
                >
                    ДОДАТИ В ОБРАНЕ
                    <i class="fas fa-arrow-right ml-3"></i>
                    <span
                        class="absolute top-0 right-0 h-full w-1 bg-white translate-x-1"
                        aria-hidden="true"
                    ></span>
                </button>
{{--                <button--}}
{{--                    aria-label="Add to favorites"--}}
{{--                    class="border border-black w-12 h-12 flex items-center justify-center"--}}
{{--                >--}}
{{--                    <i class="far fa-heart text-black text-lg"></i>--}}
{{--                </button>--}}
            </div>

            <div class="mt-6 space-y-3 text-black text-sm font-normal max-w-md">
                <p class="flex items-center space-x-2">
                    <i class="fas fa-shipping-fast text-base"></i>
                    <span>БЕЗКОШТОВНА ДОСТАВКА ЗАМОВЛЕНЬ НА СУМУ ВІД 2500 ГРН</span>
                </p>
                <p class="flex items-center space-x-2">
                    <span class="text-base">%</span>
                    <span>ЗНИЖКА 5% ПРИ ОПЛАТІ КАРТОЮ НА САЙТІ</span>
                </p>
                <p class="flex items-center space-x-2">
                    <i class="fas fa-paw text-base"></i>
                    <span>ПОКУПКА ЧАСТИНАМИ РАЗОМ ІЗ <strong>monobank</strong></span>
                </p>
            </div>

        </aside>
    </section>

    <section class="container mx-auto p-4 my-20">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold mb-6">
                Рекомендовані
            </h1>
            <a href="{{ route('products.index') }}" class="inline-block border-b border-black">Дивитись усі</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-6 gap-6">
            @foreach($recommendedProducts as $item)
                @include('components.product-cart', ['item'=>$item])
            @endforeach

        </div>
    </section>
@endsection

@section('script')
    <script>
        let currentIndex = 0;

        const slideImage = document.getElementById('slideImage');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dotsContainer = document.getElementById('dotsContainer');
        const mainImage = document.getElementById('slideImage');
        const images = document.querySelectorAll('.all-slides img');
        const slides = [mainImage.src];

        images.forEach((image, index) => {
            slides.push(image.src);
            dotsContainer.innerHTML += `<span class="w-3 h-0.5 bg-[#1a1a1a]/40 rounded-sm cursor-pointer" data-index="${index}"></span>`;
        })

        const dots = document.getElementById('dotsContainer').querySelectorAll('span');

        function updateSlide(index) {
            currentIndex = index;
            slideImage.src = slides[index];

            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-[#1a1a1a]/40');
                    dot.classList.add('bg-black');
                } else {
                    dot.classList.remove('bg-black');
                    dot.classList.add('bg-[#1a1a1a]/40');
                }
            });
        }

        prevBtn.addEventListener('click', () => {
            let newIndex = currentIndex - 1;
            if (newIndex < 0) newIndex = slides.length - 1;
            updateSlide(newIndex);
        });

        nextBtn.addEventListener('click', () => {
            let newIndex = currentIndex + 1;
            if (newIndex >= slides.length) newIndex = 0;
            updateSlide(newIndex);
        });

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = parseInt(dot.getAttribute('data-index'));
                updateSlide(index);
            });
        });
    </script>
@endsection
