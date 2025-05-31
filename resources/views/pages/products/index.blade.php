@extends('layouts.main')

@section('content')
    <section class="my-24 container mx-auto px-4 flex flex-col md:flex-row gap-8 min-h-screen">
        <div class="w-full md:w-1/4 p-4 bg-gray-50 rounded shadow-sm">
            <x-filter-section title="Категорії" :items="$categories" filter="category"/>
            <x-filter-section title="Стать" :items="$genders" filter="gender"/>
            <x-filter-section title="Бренди" :items="$brands" filter="brand"/>
        </div>

        <div class="w-full md:w-3/4 mt-10 md:mt-0">
            @if(count($products) > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($products as $product)
                        @include('components.product-cart', ['item'=>$product])
                    @endforeach
                </div>
            @else
                <div class="text-center text-gray-600 py-12 text-lg">
                    За вашим фільтром немає товару!
                </div>
            @endif
        </div>
    </section>
@endsection
