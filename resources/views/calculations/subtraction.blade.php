<!-- resources/views/calculations/subtraction.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Odejmowanie</title>
</head>
<body>
    <h1>Odejmowanie</h1>

    @if(isset($result))
        <p>Wynik: {{ $result }}</p>
    @endif

    <form method="post" action="{{ route('subtraction.calculate') }}">
        @csrf
        <label>Liczba 1: <input type="number" name="number1" required></label><br>
        <label>Liczba 2: <input type="number" name="number2" required></label><br>
        <button type="submit">Odejmij</button>
    </form>
</body>
</html>
