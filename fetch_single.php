<?php
include('connection.php');
if($_POST["user_id"]){
    $id= $_POST["user_id"];
    $sql= "SELECT * FROM users_table WHERE id= '".$id."' ";
    $result= mysqli_query($connect,$sql);
    $output='<table class=" table table-striped ">';
    $row= mysqli_fetch_assoc($result);
        $output.='<tr>
        <td><label>Firstname</label></td>
        <td></td>
        <td>'.$row["firstname"].'</td></tr>
        <tr>
        <td><label>Lastname</label></td>
        <td></td>
        <td>'.$row["lastname"].'</td><tr>
        <tr>
        <td><label>Email</label></td>
        <td></td>
        <td>'. $row["email"].'</td></tr>
        <tr>
        <td><label>Age</label></td>
        <td></td>
        <td>'.$row["Age"].'</td></tr>
        <tr>
        <td><label>Designation</label></td>
        <td></td>
        <td>'.$row["Designation"].'</td>
        </tr>
        </table>
        ';
     echo $output;  
}

?>
