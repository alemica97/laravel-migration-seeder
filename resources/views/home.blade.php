<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    <main>
        <h1>Treni in partenza oggi:</h1>
        <ul>
            @foreach ($trains as $train)
            <div>
                <span>Train number: {{ $train->train_code }}</span>
                <p>Departure Staion: {{ $train->departure_station }}</p>
                <p>Arrival Staion: {{ $train->departure_station }}</p>
                <p>Departure time: {{ $train->departure_time }}</p>
            </div>
            @endforeach
        </ul>
    </main>
</body>
</html>