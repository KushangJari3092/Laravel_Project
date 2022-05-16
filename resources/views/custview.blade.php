<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <x-navbar />
    <table class="table table-striped table-dark">
  <thead>
    <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">address</th>
        <th scope="col">state</th>
        <th scope="col">city</th>
        <th scope="col">DOB</th>
        <th scope="col">gender</th>
        <th scope="col">status</th>
        <th scope="col">action</th>
    </tr>
  </thead>

  <tbody>
      @foreach($cust as $c)
    <tr>
        <td>{{$c->cust_name}}</td>
        <td>{{$c->email}}</td>
        <td>{{$c->address}}</td>
        <td>{{$c->state}}</td>
        <td>{{$c->city}}</td>
        <td>{{$c->dob}}</td>
        <td>
            @if($c->gender=='M')
                Male
            @elseif($c->gender=='F')
                Female
            @else
                Other
            @endif
        </td>  
        <td>
            @if($c->status==1)
                <span class="badge badge-success">active</span>
            @else($c->status==0)
            <span class="badge badge-danger">inactive</span>            
            @endif
        </td>
        <td>
            <a href="{{'/customer/delete'}}/{{$c->id}}">
                <button class="btn btn-danger">Delete</button>
            </a>
            <a href="{{route('customer.edit',['id'=>$c->id])}}">
                <button class="btn btn-primary">Update</button>
            </a>
        </td>

    </tr>
    @endforeach
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>