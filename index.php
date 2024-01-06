<?php
include "db.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $messege = $_POST['messege'];

    $sql = "INSERT INTO `form_submissions`(`name`, `email`, `number`, `messege`) VALUES ('$name','$email','$number','$messege')";

    if($conn->query($sql)){
        echo "<table border='1'>
        <tr>
            <th>name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Massege</th>
        </tr>
        <tr>
            <td>$name</td>
            <td>$email</td>
            <td>$number</td>
            <td>$messege</td>
        </tr>
    </table>";
    }
    else{
        echo "error" . $sql;
    }
    
}

?>