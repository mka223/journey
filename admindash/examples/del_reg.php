<?php

include('security.php');


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $connection = mysqli_connect ("localhost" , "root" , "","travel");
    $query = "DELETE FROM user WHERE id='$id' ";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: user.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: user.php'); 
    }    
}
?>