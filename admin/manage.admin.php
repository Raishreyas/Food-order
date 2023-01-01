<?php include('partials/menu.php')?>

        <!--Main content section starts here-->
        <div class="maincontent">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br />

                <?php
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['Update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                    if(isset($_SESSION['user-not-found']))
                    {
                        echo $_SESSION['user-not-found'];
                        unset($_SESSION['user-not-found']);
                    }

                    if(isset($_SESSION['password-not-match']))
                    {
                        echo $_SESSION['password-not-match'];
                        unset($_SESSION['password-not-match']);
                    }
                   
                    if(isset($_SESSION['change-password']))
                    {
                        echo $_SESSION['change-password'];
                        unset($_SESSION['change-password']);
                    }
                
                ?>

                <br /><br /><br />
                <!-- button to add admin -->
                <a href="add-admin.php" class="btn-primary">Add Admin </a>
                <br /> <br />

                <table class="tbl-full">
                    <tr>
                        <th>S.No.</th>
                        <th>Full name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                        $sql="SELECT * FROM tbl_admin";
                        $res = mysqli_query($conn,$sql);

                        if ($res==TRUE)
                        {
                            $count= mysqli_num_rows($res);

                            $sn=1; //creating a varible

                            if($count>0)
                            {
                                //we have data in DATABASE
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    //using while loop to get all the data from database

                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];
                                    //displaying the value in table
                                    ?>
                                    <tr>
                                        <td><?php echo $sn ++; ?></td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL;?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-Primary">Change Password</a>
                                            <a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                            <a href="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-Danger">Delete Admin</a>
                            
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                //we do not have data in database
                                
                            }
                        }

                    
                    ?>

                    
                </table>

                <div class="clearfix"></div>
            </div> 
        <!--Main content section ends here-->

<?php include('partials/footer.php')?>




