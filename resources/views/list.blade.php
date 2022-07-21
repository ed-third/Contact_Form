<!DOCTYPE html>
<html>
<head>
    <title>Contacts List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/style2.css">

</head>
<body>

<h1 style="color:black;"><i class="bi bi-list-columns"></i> Contact List</h1>

    @if(Session::has('update'))
            <div class= "alert alert-primary" role="alert">
                {{Session::get('update')}}
                <i class="bi bi-person-check-fill"></i>
            </div>  
    @endif

    @if(Session::has('delete'))
        <div class="alert alert-success">
        <i class="bi bi-file-earmark-x-fill"></i>
            {{Session::get('delete')}}
        </div>
    @endif

<div class="container-fluid">

<table class="table table-dark">
    <thead>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Subject</th>
        <th>Message</th>
        <th></th>
    </tr>
    </thead>
    @foreach($infos as $info)
    <tr>
        <td>{{$info['id']}}</td>
        <td>{{$info['name']}}</td>
        <td>{{$info['email']}}</td>
        <td>{{$info['phone']}}</td>
        <td>{{$info['subject']}}</td>
        <td>{{$info['message']}}</td>
        <td>
            <a href={{"edit/".$info['id']}}><i class="bi bi-pencil-square"></i></a>
            <a href={{"delete/".$info['id']}}><i class="bi bi-trash3-fill"></i></a> 
        </td>
    </tr>
    @endforeach
</table>
</div>


</body>
</html>