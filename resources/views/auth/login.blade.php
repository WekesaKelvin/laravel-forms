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

                <h3>LOGIN</h3>
                 <hr>
                 <form action="{{route('login-user')}}" method="post">
                   
                    <div class="form-group">

                        <label for="email">Email</label>
                        <input type="text"  class="form-control" placeholder="Enter Email" name="email" value="">
                    </div>
                    <div class="form-group" style="align-content: center">
                        <label for="password">Password</label>
                        <input type="text"  class="form-control" placeholder="password" name="password" value="">
                    </div>
                   <br>
                   <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit">Login</button>
                    
                  </div>
                  <br>

                    <a href="registration">New User!Register Here.</a>
                    
                 </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>