<!doctype html>
<html lang='en'>

<head>
    <title>@yield('title', $app->config('app.name'))</title>
    <meta charset='utf-8'>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('head')

</head>

<body class="bg-slate-50 text-lg">
    <header class="bg-[#a51c30] p-2 text-zinc-50">
        <div class="flex flex-row items-center justify-between m-auto max-w-screen-xl">
            <h1 class="md:text-2xl text-xl"><a class="hover:border-b-2 border-zinc-50" href="./">(Similar to the card
                    game) War</a></h1>
            <p class=" md:text-sm text-xs"><a class="underline" href="./history">Game History</a>
            </p>
        </div>
    </header>

    <main>
        @yield('content')
        <footer class="pb-8 pt-8 text-center text-sm">
            <p>Project 3 · DGMD E-2</p>
            <p>Richie Carey</p>
        </footer>
    </main>

    @yield('body')

</body>

</html>