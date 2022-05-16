<h1>From</h1>

@if($errors->any())
    @foreach($errors->all() as $e)
        <li>
            {{$errors}}
        </li>
    @endforeach
@endif
<form action="form" method="POST">
    @csrf
    Name : <input type="text" name="name" value="{{old('name')}}"><br>
    <span style="color: red;">@error('name'){{$message}}@enderror</span>

    <br>
    <br>
    pswd : <input type="password" name="pwd"><br>
    <span style="color: red;">@error('pwd'){{$message}}@enderror</span>
    <input type="submit" value="submit">

</form>