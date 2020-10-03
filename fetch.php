<?php
include('connection.php');
$sql= "SELECT * FROM users_table";
$res= mysqli_query($connect,$sql);
$ouput='<table class=" table table-striped table-bordered">
<tr>
<th>No</th>
<th>FirstName</th>
<th>LastName</th>
<thView user detail</th>
<th>Edit</th>
<th>Delete</th>
</tr>
';
if(mysqli_num_rows($res)> 0){
    $i=0;
    while($row= mysqli_fetch_assoc($res)){
        $i++;
        $ouput.='<tr>
                    <td>'.$i.'</td>
                    <td>'.$row["firstname"].'</td>
                    <td>'.$row["lastname"].'</td>
                    <td>
                    <button type="button" name="view_detail" id="'.$row["id"].'" class="btn btn-primary btn-xs pull-right view_data">User Detail</button>   
                </td>
                    <td>
                        <button type="button" name="edit" id="'.$row["id"].'" class="btn btn-primary btn-xs btn-block edit">Edit</button>   
                    </td>
                    <td>
                        <button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs pull-right delete">Delete</button>   
                    </td>
                 </tr>';
    }

}
else{
   $ouput.=' <tr>
            <td colspan="4" align="center">Data Not Found</td>
    </tr>';
}
$ouput.='</table>';
echo $ouput;
?>