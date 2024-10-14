<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <ul>
        @foreach($posts as $post)
            <li>
                <strong>Title:</strong> {{ $post['title'] }}<br>
                <strong>Slug:</strong> {{ $post['slug'] }}<br>
                <strong>Content:</strong> {{ $post['content'] }}<br>
                <strong>Description:</strong> {{ $post['description'] }}
            </li>
        @endforeach
    </ul>
    </body>
</html>
