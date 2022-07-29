<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="rkolkata";

    $con = mysqli_connect($server, $username, $password, $database);

    if(!$con){
        die("connection failed".mysquli_connect_error());
    }
    // echo "connection successful";

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if(!$name){
        echo "Name Not Found";
    }
    elseif(!$phone){
        echo "phone not Found";
    }
    elseif (!$age){
        echo "age not Found";
    }
    elseif (!$email){
        echo "email not Found";
    }
    elseif(!$password){
        echo "password not Found";
    }


    $sql="INSERT INTO `regis` (`name`, `phone`, `age`, `email`, `password`, `dt`) VALUES ( '$name', '$phone', '$age', '$email', '$password', current_timestamp());";
    
    echo $sql;

    if($con->query($sql)  == true){
        echo "Successfully insert";
    }
    else{
        echo "ERROR: $sql <br>  $con->error";
    }
    $con->close();
?>

<!-- 
<?php
    header("../index.html");
    exit;
?> -->
