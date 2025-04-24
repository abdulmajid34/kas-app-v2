<!DOCTYPE html>
<html>
<head>
    <title>Siswa</title>
</head>
<body>
    <h2>Siswa </h2>
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
