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
        <title>LaraGigs | Find Laravel Jobs & Projects</title>
        @vite('resources/css/app.css')
</head>

<body class="mb-48 bg-gray-100">
    <nav class="flex justify-between items-center mb-4 bg-blue-400 shadow-sm">
        <div class="flex flex-row items-center">
            <a href="/"><img class="w-20" src="{{ asset('images/L.png') }}" alt="Logo"
                    class="logo" /></a>
            <h1 class="px-2 font-bold text-white text-xl md:text-3xl">LaraGigs</h1>
        </div>
        <ul class="flex space-x-3 md:space-x-6 mr-6 text-md md:text-lg">
            @auth
                <li>
                    <span class="font-bold text-blue-900">{{ auth()->user()->name}}</span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-red-600"><i class="fa-solid fa-gear"></i>
                        Manage</a>
                </li>
                <li>
                    <form action="/logout" method="post" class="inline">
                        @csrf
                        <button class="submit hover:text-red-600" name="logout"><span class="fa-solid fa-sign-out"></span></button>
                    </form>
                </li>
            @else      
                <li>
                    <a href="/register" class="hover:text-white"><i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-white"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endauth

        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer
        class="fixed bottom-0 left-0 w-full flex flex-row items-center justify-start font-bold bg-blue-300 text-gray-700 h-20 mt-24 opacity-80 md:flex-col md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

        <a href="/listings/create" class="absolute top-1/3 right-50  md:right-10 bg-red-600 text-blue-100 py-2 px-5">Post Job</a>
    </footer>
</body>

</html>
