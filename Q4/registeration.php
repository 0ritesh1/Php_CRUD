<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
</head>
<body>
    <form action="" method="POST">
        Name:
        <input type="text" name="name"><br><br>
        Email:
        <input type="email" name="email"><br><br>
        Password: 
        <input type="password" name="password"><br><br>
        Confirm Password:
        <input type="password" name="cpassword"><br><br>
        Job Title:
        <input type="text" name="job_title"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php 
    include 'db.php';
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];
        $job_title=$_POST["job_title"];

        $sql=$conn->prepare("insert into emp2 values(?,?,?,?,?)");
        $sql->bind_param('ssiis',$name,$email,$password,$cpassword,$job_title);
        
        if(empty($name) || empty($email) || empty($password) || empty($cpassword) || empty($job_title)){
            echo "<script>alert('Field is empty')</script>";
        }
        if(!filter_var('$email',FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('Email is incorrect')</script>";
        }
        if($password!=$cpassword){
            echo "<script>alert('password and confirm password does not match')</script>";
        }

        if($sql->execute()){
            echo "<script>alert('registeration is successful')</script>";
        }
        else{
            echo "<script>alert('email already exists')</script>";
        }
    }
?>