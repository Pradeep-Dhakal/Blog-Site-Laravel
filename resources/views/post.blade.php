<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post blog</title>
</head>
<body>
    <div>
        <form action="post" method="POST">
            @csrf
        Title <input type="text" name="title" placeholder="Enter Blog title Name">
        Body <textarea name="body" id="" cols="30" rows="10" placeholder="Enter your content"></textarea>
        <button type="submit">Post</button>
    </form>
    </div>
    @if (session()->has('status'))
    <div>{{session('status')}}</div>


    @endif

</body>
</html>
</x-app-layout>
