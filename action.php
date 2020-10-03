<?php
include('connection.php');

if(isset($_POST["insert_btn"])){
    $firstname= $_POST["firstname"];
    $lastname= $_POST["lastname"];
    $email =$_POST["email"];
    
    $sql= "INSERT INTO users_table(firstname,lastname,email) VALUES('$firstname','$lastname','$email')";
    $res= mysqli_query($connect,$sql);
    if($res==true){
        echo"<strong> New Record has ben inserted</strong>";
    }
    else{
        echo"<strong> Fail to insert record</strong>";
    }
}

?>