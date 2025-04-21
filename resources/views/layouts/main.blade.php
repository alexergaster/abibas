<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('storage/images/misc/logo.png') }}" type="image/x-icon">
    @yield('style')
    <title>Abibas</title>
</head>
<body class="cursor-default">
@include('partials.header')
<div>
    @yield('content')
</div>
@include('partials.footer')
</body>
<script src="https://cdn.tailwindcss.com"></script>
@yield('script')
<script>
    if (document.querySelectorAll('#toLike').length > 0) {
        const toLikeButtons = document.querySelectorAll('#toLike');

        toLikeButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                event.preventDefault();

                const product = button.dataset.product;
                let liked = JSON.parse(localStorage.getItem('likedProducts')) || [];

                if (!liked.includes(product)) {
                    liked.push(product);
                    button.classList.add('text-red-500');
                } else {
                    liked = liked.filter(id => id !== product);
                    button.classList.remove('text-red-500');
                }

                localStorage.setItem('likedProducts', JSON.stringify(liked));
            });
        });

        window.addEventListener('DOMContentLoaded', () => {
            const liked = JSON.parse(localStorage.getItem('likedProducts')) || [];

            document.querySelectorAll('#toLike').forEach(button => {
                const product = button.dataset.product;
                console.log(product)
                if (liked.includes(product)) {
                    button.classList.add('text-red-500');
                }
            });
        });

    }

</script>
</html>
