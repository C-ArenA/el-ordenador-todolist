<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-mono dark:bg-gradient-to-tr dark:from-jucux-500 dark:to-jucux-400 dark:text-slate-200 selection:bg-jucux-500 selection:text-jucux-900">
    <section class="flex flex-col items-center justify-center gap-8 h-screen max-h-screen">
        <form class="flex flex-col items-center dark:bg-jucux-900 px-6 py-10 rounded-lg shadow-2xl shadow-gray-800">
            <a href="/"><img src="./jucux.png" alt="" class="block w-28 mb-8"></a>
            <label for="email" class="w-full text-slate-400 font-medium">Correo</label>
            <input type="email" name="email" id="email" class="rounded-lg border border-slate-700 my-2 block focus:outline-none focus:dark:ring-1 focus:dark:ring-jucux-500 appearance-none text-2xl dark:bg-transparent px-3 py-1 dark:text-slate-300" placeholder="Correo Electrónico" >
            <label for="password" class="w-full text-slate-400 font-medium">Contraseña</label>
            <input class="rounded-lg my-2 px-3 py-1 text-2xl dark:text-slate-300 dark:bg-transparent border border-slate-700 focus:outline-none focus:dark:ring-1 focus:dark:ring-jucux-500" type="password" name="password" id="password">
            <button type="submit" class="mt-6 block dark:bg-jucux-400 hover:shadow-slate-600 shadow-xl shadow-slate-800 dark:text-jucux-900 px-3 py-2 rounded-lg text-2xl ">Ingresar</button>
        </form>
        <p class="text-slate-700">Para registrarte contacta al 75844266</p>
    </section>
</body>

</html>
