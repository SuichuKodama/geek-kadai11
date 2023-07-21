<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        ...(省略)...
    </head>
    <body>
        <div class='posts'>
            @foreach ($posts as $post)
            <div class='post'>
                <h1 class='title'>{{ $post->title }}</h1>
                <p class='body'>{{ $post->body }}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>