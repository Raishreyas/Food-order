<?php
    include('../config/constant.php');
//getting id which we have to delete
    $id= $_GET['id'];
    $sql = "DELETE FROM tbl_admin WHERE id=$id";
//Executing 
    $res = mysqli_query($conn, $sql);

    if ($res==true)
    {
        //echo "admin deleted";
        $_SESSION['delete'] =  "<div class='success'> Admin Deleted Successfully. </div>";

        header('location:' .SITEURL. 'admin/manage.admin.php');
    }
    else
    {
        //Echo "Failed to delete admin";
        $_SESSION['delete'] = "<div class='error'>Failed to delete admin. Try Again  </div>";

        header('location:' .SITEURL. 'admin/manage.admin.php');
    }
?>