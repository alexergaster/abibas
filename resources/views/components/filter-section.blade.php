<h2 class="font-semibold text-lg mb-4">{{ $title }}</h2>

@foreach($items as $item)
    <div>
        <a href="{{ route('products.index', [$filter . '=' . $item->id]) }}"
           class="mb-1 font-normal text-gray-700 hover:text-black hover:underline transition duration-300 ease-in-out">
            {{ $item->name }}
        </a>
    </div>
@endforeach
<hr class="border-gray-300 my-6"/>
