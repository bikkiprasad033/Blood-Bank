<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $number = $_POST['number'];
    $department = $_POST['department'];
    $year = $_POST['year'];
    $bloodgroup = $_POST['bloodgroup'];

    //database connection
    $conn = new mysqli('localhost','root','','registration');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(firstname, lastname, number, department, year, bloodgroup) 
            values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisss",?firstname, ?lastname, ?number, ?department, ?year, ?bloodgroup);
        $stmt->execute();
        echo "registration SUccessfully..";
        $stmt->close();
        $conn->close();
    }
?>