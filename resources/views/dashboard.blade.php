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

<body
    class="font-mono dark:bg-gradient-to-t dark:from-jucux-500 dark:to-jucux-400 dark:bg-jucux-900 dark:text-slate-200 selection:bg-jucux-500 selection:text-jucux-900 shadow-white">
    <main class="flex items-stretch h-screen p-6 gap-4 dark:bg-black dark:bg-opacity-80">
        <div
            class="dark:bg-jucux-900 dark:bg-opacity-95 min-h-96 basis-40 md:basis-56 xl:basis-72 2xl:basis-80 px-6 py-6 flex flex-col justify-between gap-12 items-stretch rounded-3xl">
            <div class="w-full flex flex-col items-center gap-2">
                <img src="./jucux.png" alt="" class="w-14">
                <h1 class="text-xl text-slate-400">El Ordenador</h1>
            </div>
            <div class="flex flex-col w-full gap-4 grow">
                <a href="#" @class(['text-xl', 'text-slate-300', 'px-3', 'py-2', 'rounded-xl', 'hover:bg-slate-700', 'bg-slate-800' => true])>Tareas</a>
                <a href="#" @class(['text-xl', 'text-slate-300', 'px-3', 'py-2', 'rounded-xl', 'hover:bg-slate-700', 'bg-slate-800' => false])>Proyectos</a>
                <a href="#" @class(['text-xl', 'text-slate-300', 'px-3', 'py-2', 'rounded-xl', 'hover:bg-slate-700', 'bg-slate-800' => false])>Categorías</a>
            </div>
            <div class="flex flex-col w-full ">
                <a href="#" class="text-lg text-slate-500 px-3 py-2">Perfil</a>
                <a href="#" class="text-lg text-slate-500 px-3 py-2">Logout</a>
            </div>
        </div>
        <section class="grow rounded-lg p-6">
        </section>
    </main>
</body>

</html>
