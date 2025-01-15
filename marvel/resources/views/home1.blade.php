<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Cookie Example</title>
</head>
<body>

<h1>
    @if($username)
        Welcome back, {{ $username }}!
    @else
        Welcome, new visitor!
    @endif
</h1>

{{-- Button to delete the cookie --}}
@if($username)
    <form action="{{ url('/delete-cookie') }}" method="GET">
        <button type="submit">Delete Cookie</button>
    </form>
@endif

</body>
</html>
