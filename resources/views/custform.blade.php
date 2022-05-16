    <x-navbar />

    
    
<form action="{{$url}}" method="POST">
    <h1>{{$title}}</h1>
    @csrf
    Name : <input type="text" name="name" value="{{$cust->cust_name}}">
    <br>
    pswd : <input type="password" name="pwd"><br>
    address : <input type="text" name="address"><br>
    email : <input type="email" name="email"><br>
    DOB : <input type="date" name="dob"><br>
    state : <input type="text" name="state"><br>
    city : <input type="text" name="city"><br>
    Gender : <input type="radio" name="gender" value="M">M
    <input type="radio" name="gender" value="F">F
    <input type="radio" name="gender" value="O">Other

<br>
    <input type="submit" value="submit">

</form>