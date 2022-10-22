<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>G&M Shop</title>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4 bg-laravel">
        <a href="/"><img class="w-24" src="{{ asset('images/lg.jpg') }}" alt="" class="logo" /></a>
        <h3 class="text-3xl font-bold mb-4">
            Welcome
        </h3>
        @auth
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <span class="font-bold uppercase">
                        Welcome {{ auth()->user()->name }}
                    </span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-white"><i class="fa-solid fa-gear"></i>
                        Manage Listings</a>
                </li>
                <li>
                    <form class="inline" action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="hover:text-white">
                            <i class="fa-solid fa-door-closed"></i>
                            Logout</button>
                    </form>
                </li>
                {{-- @else --}}
                {{-- <li>
                    <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
                </li> --}}
                {{-- <li>
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li> --}}
            </ul>
        @else
            <h3 class="text-3xl font-bold mb-4">
                {{-- Welcome --}}
            </h3>
        @endauth

    </nav>
    {{-- VIEW OUTPUT --}}
    <main>
        {{ $slot }}
    </main>

    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved | </p>
        <a href=" https://wa.me/254712414196" class="hover:opacity-80">
            <p class="ml-2"><i class="fa-brands fa-whatsapp"></i> +254712414196
        </a></p>
        @auth
            <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Item</a>
        @endauth
    </footer>


    <x-flash-message />
</body>

</html>