<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-8">
                
            <h1 class="text-center">Show Table</h1>
            <a href="{{route('Getform')}}" class="btn btn-primary">ADDMORE</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">CLASS</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $key=>$items)
    <tr>
      <th scope="row">{{$items->id}}</th>
      <td>{{$items->name}}</td>
      <td>{{$items->class}}</td>
      <td><a href="{{route('edit.user',$items->id)}}" class="btn btn-secondary">edit</a>  <a href="{{route('edit.user',$items->id)}}" class="btn btn-danger">delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
            </div>
        </div>
    </div>
</body>
</html>
