<a href="#">
    <div class="relative">
        <img alt="{{ $item->name }}" class="w-[300px] h-[200px] "
             src="{{ asset('storage/images/products/' . $item->image) }}"/>
        <i class="fas fa-heart absolute top-2 right-2 text-white">
        </i>
        <p class=" absolute bg-white bottom-0 left-0">
            {{ $item->price }} грн.
        </p>
    </div>
    <div class="mt-2">
        <p class="text-sm">
            {{ $item->name }}
        </p>
        <div class="flex items-center justify-between">
            <p class="text-xs text-gray-500">
                {{ $item->brand->name }}
            </p>
            <p> - </p>
            <p class="text-xs text-red-500">
                ЩЕ -30% У КОШИКУ
            </p>
        </div>

    </div>
</a>
