<?php
include 'connect.php';
    if(isset($_POST['submit'])){
        $name1=$_POST['name'];
        $email1=$_POST['email'];
        $mobile1=$_POST['mobile'];
        $password1=$_POST['password'];
    
        $sql="INSERT into crud(name,email,mobile,password) values('$name1','$email1','$mobile1','$password1')";
        $result=mysqli_query($con,$sql);

        if($result){
            header('Location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <!-- divides the the width equally -->
        <form method="POST" >
            <div class="mb-3">
                <label class="form-label"> Name</label>
                <input type="text" class="form-control" name ="name" placeholder="Enter Name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label"> Email</label>
                <input type="text" class="form-control" name ="email" placeholder="Enter email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label"> Mobile</label>
                <input type="text" class="form-control"name ="mobile" placeholder="Enter mobile" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label"> Password</label>
                <input type="text" class="form-control" name ="password"placeholder="Enter password" autocomplete="off">
            </div>



            <input type="submit" class="btn btn-primary" name="submit">
        </form>
    </div>



    
</body>

</html>