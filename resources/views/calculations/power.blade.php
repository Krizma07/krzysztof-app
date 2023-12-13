<!-- resources/views/calculations/power.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Potęgowanie</title>
</head>
<body>
    <h1>Potęgowanie</h1>

    @if(isset($result))
        <p>Wynik: {{ $result }}</p>
    @endif

    <form method="post" action="{{ route('power.calculate') }}">
        @csrf
        <label>Liczba: <input type="number" name="number" required></label><br>
        <label>Potęga: <input type="number" name="exponent" required></label><br>
        <button type="submit">Potęguj</button>
    </form>
</body>
</html>
