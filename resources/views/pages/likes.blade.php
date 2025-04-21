@extends('layouts.main')

@section('content')
    <section class="mt-20 min-h-screen container mx-auto">
        <h6 class="text-center text-2xl font-bold">Список відібраних товарів:</h6>
        <div class="mt-20 grid grid-cols-1 sm:grid-cols-6 gap-6" id="products">

        </div>
    </section>
@endsection

@section('script')
    <script>
        function getProducts() {
            const productsContainer = document.getElementById('products')
            const products = JSON.parse(localStorage.getItem('likedProducts')) || [];

            productsContainer.innerHTML = '';

            products.forEach(item => {
                item = JSON.parse(item)

                const url = `${window.location.origin}/products/${item.id}`
                productsContainer.innerHTML += `
            <a href="${url}">
                <div class="relative">
                    <img alt="${item.name}" class="w-[300px] h-[200px]"
                         src="${window.location.origin}/storage/images/products/${item.image}"/>
                    <i class="fas fa-trash absolute top-2 right-2 z-500" id="removeLike" data-product="${item.id}">
                    </i>
                    <p class=" absolute bg-white bottom-0 left-0">
                        ${item.price} грн.
                    </p>
                </div>
                <div class="mt-2">
                    <p class="text-sm">
                        ${item.name}
                        </p>
                        <div class="flex items-center justify-between">
                        <p> - </p>
                        <p class="text-xs text-red-500">
                            ЩЕ -30% У КОШИКУ
                        </p>
                    </div>

                </div>
            </a>
            `;
            })

        }

        getProducts()

        if (document.querySelectorAll('#removeLike').length > 0) {
            const toRemoveButtons = document.querySelectorAll('#removeLike');

            toRemoveButtons.forEach(button => {
                button.addEventListener('click', (event) => {
                    event.preventDefault();

                    const productId = button.dataset.product;
                    let liked = JSON.parse(localStorage.getItem('likedProducts')) || [];

                    liked = liked.filter(product => {
                        product = JSON.parse(product);
                       return  product.id !== +productId
                    });

                    localStorage.setItem('likedProducts', JSON.stringify(liked));

                    getProducts()
                });
            });
        }
    </script>
@endsection

@section('script')
    <script>

    </script>
@endsection
