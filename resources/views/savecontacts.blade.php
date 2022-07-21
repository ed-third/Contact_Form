<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body class="bg">

<div class="container mt-4">
    
<h1><i class="bi bi-person-lines-fill"></i> Contact Form</h1>
    

<form action="home" method="POST">
    
    @csrf

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>Phone</label>
                <input type="tel" class="form-control" name="phone" placeholder="e.g. 0999-999-9999" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required>
            </div>
        </div>
    </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="email@address.com" required>
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" name="subject" required>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" rows="3" required></textarea>
            </div>
            <Button type="submit" class="btn btn-dark btn-block">Submit </button>
            <br>

    @if(Session::has('success'))
        <div class= "alert alert-primary" role="alert">
            <i class="bi bi-plus-square-fill"></i>
                {{Session::get('success')}}
        </div>  
    @endif

            </div>
</form>

</div>
 


</body>
</html>