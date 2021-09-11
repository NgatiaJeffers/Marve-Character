<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Characters</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="font-sans bg-gray-200">
    <nav class="p-6 flex justify-center bg-gray-200 mb-6 border-b border-gray-800 w-full fixed">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            <li>
                <a href="/" class="p-3">Characters</a>
            </li>
            <li>
                <a href="/" class="p-3">Comics</a>
            </li>
            <li>
                <a href="/" class="p-3">Videos</a>
            </li>
            <li>
                <a href="/" class="p-3">Movies</a>
            </li>
            <li>
                <a href="/" class="p-3">More</a>
            </li>
        </ul>
    </nav>


    @yield('content')
</body>
</html>