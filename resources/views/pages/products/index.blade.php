@extends('layouts.main')

@section('content')
    <section class="my-20 flex gap-16 container mx-auto min-h-screen">
        <div class="sidebar p-6 w-[20%]">
            <x-filter-section title="Categories" :items="$categories" filter="category"/>
            <x-filter-section title="Genders" :items="$genders" filter="gender"/>
            <x-filter-section title="Brands" :items="$brands" filter="brand"/>
        </div>
        <div class="mt-20 w-[80%] grid grid-cols-1 sm:grid-cols-6 gap-6">
            @if(count($products) > 0)
                @foreach($products as $product)
                    @include('components.product-cart', ['item'=>$product])
                @endforeach
            @else
                <div class="text-center">За вашим фільтром немає товару!</div>
            @endif
        </div>
    </section>
@endsection
