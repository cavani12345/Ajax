<?php
include('connection.php');

if(isset($_POST["update"])){
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $sql= " UPDATE users_table SET firstname= '".$firstname."' , lastname= '".$lastname."' , email='".$email."' WHERE id='".$id."' ";
        $res= mysqli_query($connect,$sql);
        if($res){
            echo"<strong> Data has been sucessfully Updated</strong>";
        }
        else{
            echo"<strong> Fail to Update data</strong>";
        }
    }

?>