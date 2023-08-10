<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <div class="relative flex flex-col justify-center items-center bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white" style="min-height: 200px;">
            <h1 class="py-8">SlowController.Promos</h1>

            <pre class="w-full whitespace-pre-wrap p-8 block bg-blue-200">{{ json_encode($properties, JSON_PRETTY_PRINT) }}</pre>
        </div>
    </body>
</html>
