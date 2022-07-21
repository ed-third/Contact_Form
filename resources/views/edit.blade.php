<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="{{ asset('css/style2.css') }}" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

<h1><i class="bi bi-pen-fill"></i> Update Contact Form</h1>

<form action="/update" method="POST">
    @csrf
<input type="hidden" name="id" value="{{$info['id']}}">

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" name="name" value="{{$info['name']}}" required>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" value="{{$info['phone']}}" placeholder="e.g. 0999-999-9999" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required>
            </div>
        </div>
    </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{$info['email']}}" placeholder="email@address.com" required>
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" name="subject" value="{{$info['subject']}}" required>
            </div>
            <div class="form-group">
                <label>Message</label>
                <input type="text" class="form-control" name="message" value="{{$info['message']}}" required>
            </div>
            <Button type="submit" class="btn btn-dark btn-block">Update </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>