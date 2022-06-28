<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <main>
        <div class="page_title">
            <h1>Movies</h1>
        </div>
        <ul class="movies_list">
            @foreach ($movies as $movie)
                <li>
                    <div class="title">
                        <h3 class="uppercase">{{ $movie->title }}</h3>
                    </div>
                    <div class="original_title">
                        <span>Original title:</span>
                        <h4>{{ $movie->original_title }}</h4>
                    </div>
                    <div class="nationality">
                        <span>Nationality:</span>
                        <span class="uppercase">{{ $movie->nationality }}</span>
                    </div>
                    <div class="date">
                        <span>Date:</span>
                        <span>{{ $movie->date }}</span>
                    </div>
                    <div class="vote">
                        <span>Vote:</span>
                        <strong>{{ $movie->vote }}</strong>
                    </div>
                </li>
            @endforeach
        </ul>
    </main>

</body>
</html>