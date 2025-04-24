<!DOCTYPE html>
<html>
<head>
    <title>Kelas</title>
</head>
<body>
    <h2>Kelas </h2>
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
