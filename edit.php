<?php
include('connection.php');
if($_POST["id"]){
    $id = $_POST["id"];
    $sql= "SELECT * FROM users_table where id='$id'";
    $res= mysqli_query($connect,$sql);
    
    while( $row= mysqli_fetch_assoc($res)){
        $firstname= $row["firstname"];
        $lastname= $row["lastname"];
        $email= $row["email"];
    }
    $data= array("$firstname","$lastname","$email");
    echo json_encode($data);
}
?>