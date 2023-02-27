<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <h1 class="text-center m-5">FILM</h1>
        <div class="d-flex flex-wrap justify-content-center">
            @foreach($movies as $movie)
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h4>{{ $movie->title }}</h4>
                    <h6>{{ $movie->original_title }}</h6>
                    <div>Nationalità: {{ $movie->nationality }}</div>
                    <div><b>Voto:</b> {{ $movie->vote }}</div>
                    <div><b>Data di uscita:</b> {{ $movie->date }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</body>
</html>