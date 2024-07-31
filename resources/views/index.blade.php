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
       <h1>Categories d'evenements</h1>
         <div>
              <ul>
                @foreach($categories as $category)
                     <li>{{ $category->name }}[{{  $category->events_count }}]</li> | <a href="{{ route('category', $category->id) }}">Consulter</a>
                     <br>
                     <br>
                @endforeach
              </ul>
         </div>

         <h1>Evenements recents</h1>
            <div>
                <ul>
                    @foreach($fiveLastEvents as $event)
                        <li>{{ $event->title }} | <a href="">Consulter</a>
                        <br>
                        <br>
                    @endforeach
                </ul>
    </div>
</body>
</html>
