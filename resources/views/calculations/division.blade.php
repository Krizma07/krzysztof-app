<!-- resources/views/calculations/division.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Dzielenie</title>
</head>
<body>
    <h1>Dzielenie</h1>

    @if(isset($result))
        @if(isset($result['error']))
            <p style="color: red;">Błąd: {{ $result['error'] }}</p>
        @else
            <p>Wynik: {{ $result }}</p>
        @endif
    @endif

    <form method="post" action="{{ route('division.calculate') }}">
        @csrf
        <label>Liczba 1: <input type="number" name="number1" required></label><br>
        <label>Liczba 2: <input type="number" name="number2" required></label><br>
        <button type="submit">Podziel</button>
    </form>
</body>
</html>
