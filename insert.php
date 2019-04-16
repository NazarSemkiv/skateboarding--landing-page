<?php
$con = mysqli_connect('127.0.0.1', 'nazarsemkiv', 'nazaRENKO11');

if(!$con){
    echo 'Not Connected To Server';
}

if(!mysqli_select_db($con, 'nazarsemkiv')){
    echo 'Database Not Selected';
}

$Email = $_POST['email'];

$sql = "INSERT INTO users (Email) VALUES ('$Email')";

if(!mysqli_query($con,$sql)){
    echo 'Not inserted';
}
else{
    echo 'Inserted';
}

header("refresh:2; url=index.html");
    
?>