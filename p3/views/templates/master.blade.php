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
            <h1 class="md:text-2xl text-xl">(Similar to the card game) War</h1>
            <p class=" md:text-sm text-xs"><a class="underline hover:text-blue-100"
                    href="mailto:richiecarey@gmail.com">Richie Carey</a></p>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    @yield('body')

</body>

</html>