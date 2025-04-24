<!DOCTYPE html>
<html>
<head>
    <title>Todos</title>
</head>
<body>
    <h2>Todos </h2>
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
