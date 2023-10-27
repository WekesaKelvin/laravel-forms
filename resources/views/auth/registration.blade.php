<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>musify authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 20px">

                <h2>Registration</h2>
                 <hr>
                 <form action="{{route('register-user')}}" method ="POST">
                    @if(Session::has ('success'))
                    <div class ="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has ('failed'))
                    <div class ="alert alert-danger">{{Session::get('failed')}}</div>
                    @endif
                    @csrf
            
                    <div class="form-group">
                        <label for="name">Full name</label>
                        <input type="text"  class="form-control" placeholder="Enter full name" name="name" value="{{old('name')}}">
                        <span class="text-danger">@error('name'){{$message}} @enderror</span>


                    </div>
                    <div class="form-group">

                        <label for="email">Email</label>
                        <input type="text"  class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('Email'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text"  class="form-control" placeholder="password" name="password" value="{{old('password')}}">
                    
                    </div>
                    <br>
                   <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="Submit"> Register</button>
                    
                  </div>
                  <br>
                    <a href="login">Already Registered !! Login Here</a>
                 </form>
            </div>
        </div>
    </div>

</body>
</html>