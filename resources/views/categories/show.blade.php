<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <div>
        <h1>Accueil</h1>
        <div>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('home') }}">Categories</a></li>
                <li><a href="{{ route('home') }}">Evenements</a></li>
            </ul>
        </div>
       <h1>Details de la categorie {{ $category->name }}</h1>
         <div>
              <ul>
                @foreach($category->events as $event)
                     <li>{{ $event->title }}</li> | <a href="{{ route('reservation.create', $event->id) }}">Reserver</a>
                     <br>
                     <br>
                @endforeach
              </ul>
         </div>
</body>
</html>
