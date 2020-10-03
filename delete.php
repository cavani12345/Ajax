<?php
include('connection.php');
if($_POST["id"]){
    $id= $_POST["id"];
    $sql= " DELETE FROM users_table WHERE id='$id'";
    $res= mysqli_query($connect,$sql);
    if($res){
        echo" <strong>Data has been deleted sucessfully</strong>";
    }
    else{
        echo" <strong>Data not deleted</strong>";
    }
}
?>