<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Employee Data</title>
</head>
<body>
    <form action="" method="POST">
        ID:
        <input type="number" name="id"><br>
        Name:
        <input type="text" name="name"><br>
        Job Title:
        <input type="text" name="job_title"><br>
        Salary:
        <input type="number" name="salary"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php 
    include 'db.php';
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $id=$_POST["id"];
        $name=$_POST["name"];
        $job_title=$_POST["job_title"];
        $salary=$_POST["salary"];

        $sql=$conn->prepare("insert into emp values(?,?,?,?)");
        $sql->bind_param('issi',$id,$name,$job_title, $salary);

        if($sql->execute()){
            echo "data inserted";
        }
    }
?>