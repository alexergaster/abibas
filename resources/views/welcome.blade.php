@extends('layouts.main')

@section('style')
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
@endsection

@section('content')

    <section class="relative w-screen h-screen overflow-hidden">
        <a href="{{ route('products.index') }}" class="block w-full h-full relative">
            <img src="{{ asset('storage/images/misc/main_1.jpg') }}"
                 alt=""
                 class="absolute inset-0 w-full h-full object-cover"/>
            <div
                class="absolute z-10 top-1/2 left-1/3 -translate-x-1/2 -translate-y-1/2 flex items-center bg-black text-white border border-black px-6 py-3 text-sm md:text-base hover:bg-white hover:text-black transition">
                КУПИТИ
                <i class="fas fa-arrow-right ml-2"></i>
            </div>
        </a>
    </section>


    <section class="container mx-auto px-4 mt-20">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
            <h1 class="text-2xl sm:text-3xl font-bold">
                ЩЕ -30% У КОШИКУ
            </h1>
            <a href="{{ route('products.index') }}" class="inline-block border-b border-black text-sm">
                Дивитись усі
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            @foreach($products as $item)
                @include('components.product-cart', ['item' => $item])
            @endforeach
        </div>
    </section>

    <section class="relative mt-20 w-full h-[60vh] sm:h-[70vh] md:h-[90vh] lg:h-screen overflow-hidden">
        <a href="{{ route('products.index', ['brand' => '3']) }}" class="block w-full h-full relative">
            <video
                src="{{ asset('storage/images/misc/main_2.mp4') }}"
                class="absolute inset-0 w-full h-full object-cover"
                loop autoplay playsinline muted>
            </video>

            <div class="absolute z-10 bottom-10 sm:bottom-16 left-6 sm:left-12 md:left-20 flex flex-col gap-2 sm:gap-3">
            <span class="uppercase text-white font-bold text-xl sm:text-3xl md:text-4xl lg:text-5xl">
                ADIZERO ARUKU
            </span>
                <span class="text-white text-sm sm:text-base md:text-lg">
                Створені для життя в русі.
            </span>
                <div class="px-4 py-2 mt-2 sm:mt-4 bg-black text-white border border-black w-max text-sm sm:text-base hover:bg-white hover:text-black transition">
                    КУПИТИ
                    <i class="fas fa-arrow-right ml-2"></i>
                </div>
            </div>
        </a>
    </section>



    <section class="container mx-auto p-4 mt-20">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold mb-6 uppercase">
                ADIZERO ARUKU
            </h1>
            <a href="{{ route('products.index', ['brand' => '3']) }}" class="inline-block border-b border-black">Дивитись
                усі</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">

            @foreach($productsBrand as $item)
                @include('components.product-cart', ['item' => $item])
            @endforeach

        </div>
    </section>

    <section class="container mx-auto p-4 mt-20">
        <h1 class="text-3xl font-bold mb-8">
            ДЛЯ КОГО ОБИРАЄШ?
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach($genders as $gender)
                <a href="{{ route('products.index', ['gender'=> $gender->id]) }}" class="relative">
                    <img alt="" class="w-full h-auto"
                         src="{{ asset('storage/images/product_type/' . $gender->images) }}"/>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-white text-xl font-bold">{{ $gender->name }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    <section class="container mx-auto p-4 mt-20">
        <h1 class="text-center text-2xl font-bold mb-4">
            SNEAKERS DAY | ЩЕ -30% У КОШИКУ
        </h1>
        <div class="flex flex-wrap justify-center mb-8">
            @foreach($categoriesList as $categoryList)
                <a href="{{ route('products.index', ['gender'=> $categoryList->id]) }}"
                   class="border border-black px-4 py-2 m-2">
                    {{ $categoryList->name }}
                </a>
            @endforeach
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($categoriesMain as $categoryMain)
                <a href="{{ route('products.index', ['gender'=> $categoryList->id]) }}" class="relative">
                    <img alt="" class="w-full h-auto"
                         src="{{ asset('storage/images/product_type/' . $categoryMain->images) }}"/>
                    <div class="absolute bottom-0 left-0 right-0 bg-white text-center py-2">
                        {{ $categoryMain->name }}
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    <section class="py-20 mt-20 bg-gray-200">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="px-2">
                <h1 class="text-lg font-bold uppercase mb-4">Історії, стиль та спортивний одяг abibas з 1949 року</h1>
                <p class="text-sm leading-relaxed mb-4">
                    Спорт підтримує нас у формі. Тримає нас у свідомості. Об’єднує нас. Завдяки спорту ми маємо
                    можливість змінювати життя. Будь то через історії спортсменів, що надихають. Допомагаємо встати та
                    рухатися. Спортивний одяг з новітніми технологіями для підвищення ефективності. Стати найкращою
                    версією себе. abibas пропонує дім бігунам, баскетболістам, футболістам та любителям фітнесу. Людина,
                    що займається хайкінгом, любить втекти з міста. Вчитель йоги, що відкриває нове. Любителів бігати,
                    які знайшли однодумців в abibas Runners. 3-смужки можна побачити на музичній сцені, на фестивалях.
                    Наш спортивний одяг допоможе тобі зосередитись ще до того, як прозвучить свисток. Під час перегонів
                    і на фініші. Ми тут, щоб підтримати кожного спортсмена. Поліпшити їх гру. Їх життя. І змінити світ.
                    abibas — це більше, ніж спортивний одяг та взуття. Ми співпрацюємо з найкращими в індустрії, щоб
                    створювати одяг для тих, хто любить спорт. Наші команди тестують нові технології, щоб створити
                    інноваційні продукти, які змінюють правила гри. Створити зміни. І ми думаємо про вплив на наш світ.
                </p>
            </div>
            <div class="px-2">
                <h1 class="text-lg font-bold uppercase mb-4">Тренувальний одяг для будь-якого виду спорту</h1>
                <p class="text-sm leading-relaxed mb-4">
                    abibas розробляє одяг для спортсменів усіх видів та сумісно з ними. Творці, які люблять змінювати
                    гру. Порушуй правила та встановлюй нові. Потім знову розбивай їх. Ми забезпечуємо команди та окремих
                    осіб спортивним одягом перед матчем, щоб залишатися зосередженими. Ми розробляємо спортивний одяг,
                    який допоможе вам досягти фінішу, щоб виграти матч. Ми підтримуємо жінок за допомогою біостальтера
                    та легінсів, створених спеціально для них. Він найніжніший до високої підтримки. Максимальний
                    комфорт. Ми проєктуємо, впроваджуємо інновації та тестуємо новітні технології в дії. На полі, на
                    доріжках, на корті, у спортзалі. Класичний чи новий спортивний одяг abibas для життя. Як Stan Smith.
                    І Superstar. Тепер можна побачити на вулицях міста та села.
                </p>
                <p class="text-sm leading-relaxed mb-4">
                    Завдяки нашим колабораціям стираємо межі між високою модою та високою продуктивністю. Наш спортивний
                    одяг abibas by Stella McCartney, наприклад, підтримує вас у будь-якому виді спорту, не виходячи за
                    межами. Або як abibas by Pharrell Williams. Наші колекції Originals, як і наші інновації,
                    народжуються на полі. Наше життя постійно змінюється. Стає все більш універсальним. І abibas
                    розробляє для життя в усьому світі.
                </p>
            </div>
        </div>
    </section>
@endsection
