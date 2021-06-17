<?php

  //set connection variables 
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'motors_database';
  $db_port = 8889;

  //connection to server & database 
  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

  //check connection 
  if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  endif;
  



$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];
$v4 = $_POST['v4'];
$v5 = $_POST['v5'];
$v6 = $_POST['v6'];


if(isset($_POST['save'])){

    echo "<br>";

    $my_query = "";

    $my_query = "select * from motors_values WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO motors_values (v1, v2, v3, v4, v5, v6) VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', $v6)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['on'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from on_values WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO on_values (isOn) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['off'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from off_values WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO off_values (isOff) VALUES (0)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}


?>