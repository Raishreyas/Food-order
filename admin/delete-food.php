<?php 

    include('../config/constant.php');
    if(isset($_GET['id']) && isset($_GET['image_name']))
    {
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        if($image_name != "")
        {
            $path = "../images/food/".$image_name;
            $remove = unlink($path);

            if($remove==false)
            {
                $_SESSION['remove'] = "<div class='error'>Failed to remove food image.</div>";
                header('location:'.SITEURL. 'admin/manage.food.php');
                die();
            }
        }
        
        $sql="DELETE FROM tbl_food WHERE id= $id";
        $res = mysqli_query($conn, $sql);
        if($res==true)
        {
            $_SESSION['delete'] = "<div class='sucess'>Food Deleted Succesfully.</div>";
            header('location:'.SITEURL. 'admin/manage.food.php');    
        }
    }
    else
        {
            $_SESSION['unauthorized'] = "<div class= 'error'> Access Denied </div>";
            header('location:'.SITEURL. 'admin/manage.food.php');
        }

?>