<?php
$ServerName="localhost";
$ServerUsername="root";
$Password="";
$dbName="employee_db";
$conn=new mysqli($ServerName,$ServerUsername,$Password,$dbName);
if(!$conn){
    echo "Database doesn't Connected";
}
else{
    echo "Database Connected Successfully";
}