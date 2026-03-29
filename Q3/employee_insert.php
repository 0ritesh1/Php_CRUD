<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee insert Data</title>
</head>
<body>
    <form action="" method="POST">
        Id:
        <input type="number" name="id"><br>
        Name:
        <input type="text" name="name"><br>
        Position:
        <input type="text" name="position"><br>
        Salary: 
        <input type="number" name="salary"><br>
        <button type="submit">Submit</button>
    </form>

    <a href="employee_show.php">Show Employees</a>
</body>
</html>

<?php 
    include 'db.php';
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $id=$_POST["id"];
        $name=$_POST["name"];
        $position=$_POST["position"];
        $salary=$_POST["salary"];

        $sql=$conn->prepare("insert into emp1 values(?,?,?,?)");
        $sql->bind_param('issi',$id,$name,$position,$salary);

        if($sql->execute()){
            echo "data inserted";
        }
    }
?>