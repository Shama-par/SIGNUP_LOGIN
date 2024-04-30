<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
</head>
<body>

    

        <div class= "card w-25 ml-auto m-5">
        <div class="card-header text-center">
            <h3>Sign Up</h3>
        </div>

        <div class="card-body">
            <form action="SignUP.php" method="post">
                <div class="form-group">
                    Name 
                    <input type="text" name="fullname" class="form-control">
                </div>

                <div class="form-group">
                    Mobile
                    <input type="number" name="Mobile_no" class="form-control">
                </div>

                <div class="form-group">
                    DOB
                    <input type="Date" name="DOB" class="form-control">
                </div>



                <div class="form-group mt-2">
                    Email Id
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="form-group mt-2">
                 Password
                 <input type="password" name="password" class="form-control">
                </div>

                <div class= "form-group">
                    <button type="submit" class= "btn btn-primary mt-3">Sign Up</button>
                </div>
            </form>
            
        </div>

    </div>

    

    <div class= "card w-25 ml-auto m-5">
        <div class="card-header text-center">
            <h3>Login</h3>
        </div>

        <div class="card-body">
            <form action="Login.php" method="post">
                

                <div class="form-group mt-2">
                    Email Id
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="form-group mt-2">
                 Password
                 <input type="password" name="password" class="form-control">
                </div>

                <div class= "form-group">
                    <button type="submit" value="Login" class= "btn btn-primary mt-3">Login</button>
                </div>
            </form>
            
        </div>

    </div>


    
</body>
</html>