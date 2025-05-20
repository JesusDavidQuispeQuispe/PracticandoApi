<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

             <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <!-- Styles -->
   
    </head>
     <body class="bg-gray-100 text-gray-700">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-3 my-10">
                
            @foreach ($posts as $post)
            <div class="bg-white hover:bg-blue-100 border border-gray-200  p-5">
                <h2>{{ $post->title }}</h2>
                <p class="text-xs">{{ $post->excerpt }}</p>
                <p class="text-xs text-right">{{ $post->created_at }}</p>
            </div>
            @endforeach

            </div>
            {{ $posts->links() }}
        </div>
    </body>
</html>
