<x-guest-layout>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post</title>
    </head>
    <body>
        <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
        <a href="#" class="w-full block h-full">
            <img alt="blog photo" src="{{ $post->img_url }}" class="max-h-40 w-full object-cover"/>
            <div class="bg-white dark:bg-gray-800 w-full p-4">
                <p class="text-gray-800 dark:text-gray-300 font-light text-md">
                {{$post->description}} 
                </p>
                <div class="flex items-center">
            <img class="w-10 h-10 rounded-full mr-4" src="{{ $post->img_url }}" alt="Avatar of Writer">
            <div class="text-sm">
                <p class="text-gray-900 leading-none">{{$post->user->name}}</p>
                <p class="text-gray-600">Aug 9</p>
            </div>
                </div>
            </div>
        </a>
        </div>  
    </body>
    </html>
</x-guest-layout>




