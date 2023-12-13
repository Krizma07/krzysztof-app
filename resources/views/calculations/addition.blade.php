<!-- resources/views/calculations/addition.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Dodawanie</title>
</head>
<body>
    <h1>Dodawanie</h1>

    @if(isset($result))
        <p>Wynik: {{ $result }}</p>
    @endif

    <form method="post" action="{{ route('addition.calculate') }}">
        @csrf
        <label>Liczba 1: <input type="number" name="number1" required></label><br>
        <label>Liczba 2: <input type="number" name="number2" required></label><br>
        <button type="submit">Dodaj</button>
    </form>
</body>
</html>
