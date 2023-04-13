<?php 
include("connection.php");
if(isset($_GET['deleteId'])){
    $id=$_GET['deleteId'];
    $delete_query="delete from services where id='$id'";
    $result=mysqli_query($connect,$delete_query);
    if($result){
      header("Location:services.php");
    }else{
        echo mysqli_error($connect); 
    }
}
?>