<a href="{{ route('products.show', $item->id) }}" class="block group">
    <div class="relative w-full aspect-[3/2] overflow-hidden rounded-lg">
        <img
            alt="{{ $item->name }}"
            src="{{ asset('storage/images/products/' . $item->image) }}"
            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
        />
        <i class="fas fa-heart absolute top-2 right-2 z-10 text-white text-lg drop-shadow" id="toLike" data-product="{{ $item }}">
        </i>
        <p class="absolute bottom-0 left-0 bg-white bg-opacity-80 px-2 py-1 text-sm font-semibold">
            {{ $item->price }} грн.
        </p>
    </div>

    <div class="mt-2">
        <p class="text-sm font-medium truncate">
            {{ $item->name }}
        </p>
        <div class="flex items-center justify-between text-xs text-gray-600">
            <p>{{ $item->brand->name }}</p>
            <p class="text-red-500">ЩЕ -30% У КОШИКУ</p>
        </div>
    </div>
</a>
