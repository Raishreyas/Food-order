<?php
    include('../config/constant.php');
    if(isset($_GET['id']) && isset($_GET['image_name']))
    {
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        if($image_name != "")
        {
            $path = "../images/category/".$image_name;
            $remove = unlink($path);

            if($remove==false)
            {
                $_SESSION['remove'] = "<div class='error'>Failed to remove category image.</div>";
                header('location:'.SITEURL. 'admin/manage.catagory.php');
                die();
            }
        }

        $sql="DELETE FROM tbl_catagories WHERE id= $id";
        $res = mysqli_query($conn, $sql);
        if($res==true)
        {
            $_SESSION['delete'] = "<div class='sucess'>Category Deleted Succesfully.</div>";
            header('location:'.SITEURL. 'admin/manage.catagory.php');    
        }
        else
        {
            $_SESSION['delete'] = "<div class='error'>Failed to delete category.</div>";
            header('location:'.SITEURL. 'admin/manage.catagory.php');
        }
    }
    else
    {
        header('location:'.SITEURL. 'admin/manage.catagory.php');
    }
?>