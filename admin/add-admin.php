<?php include('partials/menu.php')?>

<div class="maincontent">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br><br>

        <?php
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                
                ?>
                
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>
                        Full Name:
                    </td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>

                <tr>
                    <td>
                        Username:
                    </td>
                        <td><input type="text" name="username" placeholder="Enter Your Username">
                    </td>
                </tr>

                <tr>
                    <td>
                        Password:
                    </td>
                        <td><input type="password" name="password" placeholder="Enter Your Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
            
    </div>
</div>



<?php
        //process the value from form and save it in database//
        //check wether form is submited or not//
        if(isset($_POST['submit']))
        {
            //button clicked //
             
            //get data from DATABASE
             $full_name = $_POST['full_name'];
             $username = $_POST['username'];
             $password =  ($_POST['password']); 
            //save data to DATABASE
            $sql = "INSERT INTO tbl_admin set
                full_name= '$full_name',
                username= '$username',
                password= '$password'
                ";

            // execution
            $res = mysqli_query($conn, $sql) or die(mysqli_error());
        
            if ($res==TRUE)
            {
                $_SESSION['add']="Admin Added Successfully";
                //redirect page
                header("location:".SITEURL.'admin/manage.admin.php');
            
            }
            else
            {
                $_SESSION['add']="Failed TO Add Admin";
                //redirect page
                header("location:".SITEURL.'admin/add.admin.php');   
            }
        
        }

        
        

?>
<?php include('partials/footer.php')?>