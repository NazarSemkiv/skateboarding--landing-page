<?php
$con = mysqli_connect('127.0.0.1', 'nazarsemkiv', 'nazaRENKO11');

if(!$con){
    echo 'Не з"єднано з сервером';
}

if(!mysqli_select_db($con, 'nazarsemkiv')){
    echo 'База даних не вибрана';
}

$Email = $_POST['email'];

$sql = "INSERT INTO users (Email) VALUES ('$Email')";

if(!mysqli_query($con,$sql)){
    echo 'Не додано в базу даних для отримання оновлень';
}
else{
    echo 'Додано в базу даних для отримання оновлень';
}

header("refresh:2; url=index.html");
    
?>
