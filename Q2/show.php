<?php
include 'db.php';
$sql = $conn->prepare("select * from emp");
$sql->execute();
$result = $sql->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Employee Data</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            background: linear-gradient(lightblue, lightpink, aqua);
        }

        th {
            background-color: #333;
            color: white;
        }

        td, th {
            padding: 10px;
        }
    </style>
</head>
<body>

<h4>Employee Table</h4>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Job Title</th>
        <th>Salary</th>
    </tr>

<?php
while($row = $result->fetch_assoc()){
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["job_title"]; ?></td>
    <td><?php echo $row["salary"]; ?></td>
</tr>
<?php
}
?>

</table>

</body>
</html>