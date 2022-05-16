<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
<h1>Welcome Kushang into demowelcome page</h1>

<h2>id = {{$id}}</h2>
<h2>name = {{$name ?? "guest"}}</h2>

<a href="hello">hello page</a>
<br>


city = {!! $city !!}
city = {{ $city }}
<br>
<br>


    @if($name != "")
        {{"name is not empty"}}
    @else
        {{"name is empty"}}
    @endif

<br>
<br>

    @for($i=1;$i<=5;$i++)
    <h4>
        {{$i}}
    </h4>
    @endfor


</body>
</html>