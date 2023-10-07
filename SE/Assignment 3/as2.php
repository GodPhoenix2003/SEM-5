<?php
$servername="localhost";
$username="root";
$password="";
$database_name="student_register_db";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

if(isset($_POST['save'])){
    $___=$_POST['___'];
    $Board=$_POST['Board'];
    $Percentage=$_POST['Percentage'];
    $Year_of_Passing=$_POST['Year_of_Passing'];

    $sql_query="INSERT INTO student_qualification (___,Board,Percemtage,Year_of_Passing)
    VALUES('$___','$Board','$Percentage','$Year_of_Passing')";

    if(mysqli_query($conn,$sql_query)){
        echo "New Details Entry inserted successfully";
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
