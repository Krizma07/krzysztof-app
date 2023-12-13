<!-- resources/views/calculations/multiplication.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Mnożenie</title>
</head>
<body>
    <h1>Mnożenie</h1>

    @if(isset($result))
        <p>Wynik: {{ $result }}</p>
    @endif

    <form method="post" action="{{ route('multiplication.calculate') }}">
        @csrf
        <label>Liczba 1: <input type="number" name="number1" required></label><br>
        <label>Liczba 2: <input type="number" name="number2" required></label><br>
        <button type="submit">Pomnóż</button>
    </form>
</body>
</html>
