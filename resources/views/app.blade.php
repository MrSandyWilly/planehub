<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-black">
    <div class="bg-gray-900 bg-opacity-50 w-full">
        <div class="h-16 w-8/12 mx-auto flex flex-none items-center">
            <img src="{{url('/images/planehub.svg')}}" alt="Image" width="180px"/>
            <div class="flex-grow">
                <form class="flex">
                    <input type="text" name="search" id="search" placeholder="Search" autocomplete="off" class="w-full bg-gray-900 rounded-tl rounded-bl ml-10 px-2 py-1 text-gray-400 focus:outline-none">
                    <button class="bg-blue flex items-center px-2.5 rounded-tr rounded-br hover:bg-tailwindblue-400">
                        <span class="material-icons">
                            search
                        </span>
                    </button>
                </form>
            </div>
            <div class="flex flex-row-reverse ml-5 text-gray-400 text-sm">
                <a href="#" class="mx-1">Login</a>
                <a href="#" class="mx-1">Register</a>
            </div>

        </div>
    </div>
    @yield('content')
</body>
</html>