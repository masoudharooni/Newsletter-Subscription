<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsleeter page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>Newsletter</h1>
    <form action="{{ route('newsletter.submit') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Enter Email...">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
