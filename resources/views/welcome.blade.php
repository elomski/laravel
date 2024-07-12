<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" >
        <script></script>
        <style>
            body{
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-gray-200 p-4" >

       <div class="lg:w-2/4 mx-auto py-8 px-6 bg-white rounded-xl">
            <h1 class="font-bold text-5xl text-center mb-8"> Laravel + tailwind</h1>
            <div class="mb-6">
                <form action=""class="flex flex-col space-y-4" method="POST">
                    @csrf

                <input type="text" name="title" placeholder="The todo title" class="py-3 px-4 bg-gray-100 rounded-xl" id="">
                <textarea name="description" placeholder="The todo description"class="py-3 px-4 bg-gray-100 rounded-xl"></textarea>

                <button class="w-28 py-4 px-8 bg-green-500 text-white rounded-xl">Add</button>
            </form>
            </div>
            <hr>
            <div class="mt-2">
                @foreach($todos as $todo )
                <div
                 @class([
                    'py-4 flex items-center border-b border-gray-300 px-3',
                    $todo->isDone ? 'bg-green-200' : ''
                    ])
                
                >
                    <div class="flex-1 pr-8">
                        <h3 class="text-lg font-semibold">{{$todo->title}}</h3>
                        <p class="text-gray-500">{{$todo->description}}</p>
                    </div>
                    <div class="flex space-x-3">
                        <form  action="/{{$todo->id}}"  method="POST">
                            @csrf
                            @method('PATCH')
                        <button class="py-2 px-2 bg-green-500 text-white rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/></svg></button>
                    </form>
                    

                    <form  action="/{{$todo->id}}"  method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="py-2 px-2 bg-red-500 text-white rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><path fill="currentColor" d="M216 48h-36V36a28 28 0 0 0-28-28h-48a28 28 0 0 0-28 28v12H40a12 12 0 0 0 0 24h4v136a20 20 0 0 0 20 20h128a20 20 0 0 0 20-20V72h4a12 12 0 0 0 0-24M100 36a4 4 0 0 1 4-4h48a4 4 0 0 1 4 4v12h-56Zm88 168H68V72h120Zm-72-100v64a12 12 0 0 1-24 0v-64a12 12 0 0 1 24 0m48 0v64a12 12 0 0 1-24 0v-64a12 12 0 0 1 24 0"/></svg></button>
                        </form>
                    </div>
                </div>
               @endforeach
            </div>
    </div>

    </body>
</html>
