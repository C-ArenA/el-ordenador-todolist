<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>El Ordenador ToDoList</title>

    <!-- Fonts -->

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-mono dark:bg-jucux-900 dark:text-slate-200 selection:bg-jucux-500 selection:text-jucux-900">
    <header class="fixed w-screen flex items-center justify-between px-9 py-4">
        <div class="flex items-center gap-5">
            <img src="./jucux.png" alt="logo de Jucux" class="block w-10">
        <h2 class="font-bold">El Ordenador</h2>
        </div>
        <button>Empezar a Sufrir</button>
    </header>
    <section class="flex flex-col items-center justify-center gap-8 h-screen max-h-screen text-center mx-9">

        <div>
    <h1 class="text-4xl font-bold my-4 xl:text-8xl lg:text-7xl md:text-6xl sm:text-5xl " >El Ordenador </h1>
<span class="text-sm bg-jucux-500 hover:opacity-100 opacity-50 text-jucux-900 py-1 px-2">Yet Another ToDoList</span>
        </div>
    <p class="text-xl dark:text-gray-400 font-sans">Mi mama me mima, el ordenador me humilla. To Do List gritona y regañona</p>
    <a class="rounded-sm text-xl px-3 py-2 dark:bg-jucux-400 hover:dark:bg-jucux-300 hover:text-2xl hover:cursor-pointer shadow-xl shadow-slate-800 text-jucux-900 font-bold">Elijo Sufrir</a>
    </section>
</body>

</html>
