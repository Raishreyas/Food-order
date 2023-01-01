<?php include('partials/menu.php')?>
<div class="maincontent">
    <div class="wrapper">
        <h1>Manage Food</h1>

        <br />
            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset ($_SESSION['add']);
                }

                if(isset($_SESSION['remove']))
                {
                    echo $_SESSION['remove'];
                    unset ($_SESSION['remove']);
                }

                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset ($_SESSION['delete']);
                }
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];
                    unset ($_SESSION['update']);
                }
                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset ($_SESSION['upload']);
                }
                if(isset($_SESSION['failed-remove']))
                {
                    echo $_SESSION['failed-remove'];
                    unset ($_SESSION['failed-remove']);
                }
            ?>
            <br><br>
                <!-- button to add admin -->
                <a href="<?php echo SITEURL;?>admin/add-food.php" class="btn-primary">Add Food </a>
                <br /> <br />

                <table class="tbl-full">
                    <tr>
                        <th>S.No.</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM tbl_food";
                        $res = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($res);
                        $sn=1;

                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $id = $row['id'];
                                $title = $row['title'];
                                $price = $row['price'];
                                $image_name = $row['image_name'];
                                $featured = $row['featured'];
                                $active = $row['active'];
                                ?>
                                <tr>
                                    <td><?php echo $sn++;?></td>
                                    <td><?php echo $title;?></td>
                                    <td><?php echo $price;?></td>
                                    <td>
                                        <?php
                                                if($image_name!="")
                                                {
                                                    ?>
                                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" width="50px">
                                                    <?php
                                                
                                                }
                                                else
                                                {
                                                    echo "<div class = 'error'>Image Not Added.</div>";
                                                }
                                        ?>
                                    </td>
                                    <td><?php echo $featured;?></td>
                                    <td><?php echo $active;?></td>
                                    <td>
                                        <a href="<?PHP echo SITEURL;?>admin/update-food.php? id=<?php echo$id;?>&image_name=<?php echo $image_name; ?>" class="btn-secondary">Update Food</a>
                                        <a href="<?PHP echo SITEURL;?>admin/delete-food.php? id=<?php echo$id;?>&image_name=<?php echo $image_name; ?> " class="btn-Danger">Delete Food</a>
                                        
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        else
                        {
                            echo "<tr><td colspan='7' class='error'>Please Add Food First.</td></tr>";
                        }
                    ?>

                    
                    
                </table>

    </div>
    
</div>
<?php include('partials/footer.php')?>