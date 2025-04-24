<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- favicovn --}}
    <link rel="icon" href="{{ asset('assets/images/my_logo.jpg') }}" />
    <title>403 anAuthorize</title>

    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat:700");

        .container {
            height: 100vh;
            font-family: "Montserrat", "sans-serif";
            font-weight: bolder;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

            a {
                color: black;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>403 An error as occured.</h1>
        <h1> <span class="ascii">(╯°□°）╯︵ ┻━┻</span></h1>
        <a href="{{ route('login') }}">Go back</a>
    </div>
</body>

</html>
