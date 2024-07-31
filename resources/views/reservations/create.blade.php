<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>
    <h1>Reserver pour l'evenement</h1>
    @if(session()->has('success'))
        <div style='color:green'>{{ session()->get('success') }}</div>
    @endif
    <form action='{{ route('reservation.store') }}' method='POST'>
        @csrf
        <input type='text' name='first_name' placeholder='Nom'>
        @error('first_name')
            <span style='color:red'>{{ $message }}</span>
        @enderror
        <input type='text' name='last_name' placeholder='Prénoms'>
        @error('last_name')
            <span style='color:red'>{{ $message }}</span>
        @enderror
        <input type='text' name='phone' placeholder='Contact'>
        @error('phone')
            <span style='color:red'>{{ $message }}</span>
        @enderror

        <input type='hidden' name='eventId' value='{{ $eventId }}'>
        <br>
        <br>
        <button type='submit'>Reserver</button>
    </form>
</body>

</html>
