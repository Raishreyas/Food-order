<?php include('partials/menu.php')?>

<div class="maincontent">
    <div class="wrapper">
        <h1>Add food</h1>
        <br><br>

        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td>
                        <input type="text" name="title" placeholder="Food Name"> 
                    </td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td>
                        <textarea name="description"  cols="30" rows="5" placeholder="Write something about the food."></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td>
                        <input type="number" name="price" >
                    </td>
                </tr>
                <tr>
                    <td>Image:</td>
                    <td>
                        <input type="file" name="image" >
                    </td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td>
                        <select name="category" >

                            <?php 
                                $sql = "SELECT*FROM tbl_catagories WHERE active ='Yes'";
                                $res = mysqli_query($conn,$sql);
                                $count = mysqli_num_rows($res);
                                if($count>0)
                                {
                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        $id=$row['id'];
                                        $title=$row['title'];
                                        ?>

                                        <option value="<?php echo $id; ?>"> <?php echo $title; ?> </option>
                                        <?php
                                        
                                        
                                    }
                                }
                                else
                                {
                                    ?>
                                    <option value="0">No Category Found</option>
                                    <?php
                                }
                            ?>
                            
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Featured:</td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes
                        <input type="radio" name="featured" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td>Active:</td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes
                        <input type="radio" name="active" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td colspan= "2" >
                        <input type="submit" name="submit" value="Add Food" class="btn-secondary">
                    </td>
                </tr>

                
    </div>      
</div>

<?php
        //process the value from form and save it in database//
        //check wether form is submited or not//
        if(isset($_POST['submit']))
        {
            //button clicked //
             
            //get data from Form
             $title = $_POST['title'];
             $description = $_POST['description'];
             $price =  ($_POST['price']); 
             $category=  ($_POST['category']); 
             if(isset($_POST['featured']))
                {
                    $featured = $_POST['featured'];
                }
                else 
                    {
                        $featured = "No";
                    }

                if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                    {
                        $active = 'No';
                    }
                
                    if(isset($_FILES['image']['name']))
                    {
                        
                        $image_name = $_FILES['image']['name'];
                        if($image_name != "")
                        {
                            $ext = end ( explode ('.' , $image_name));
                            $image_name="Food_Name".rand(000,999).'.'.$ext;
                            $source_path = $_FILES['image']['tmp_name'];
                            $destination_path = "../images/food/" .$image_name;
                            $upload = move_uploaded_file($source_path, $destination_path);
                            if($upload==false)
                            {
                                $_SESSION['upload'] = "<div class='error'>Failed to Upload image. </div>";
                                header('location:'.SITEURL.'admin/add-food.php');
                                die();
                            }
                        }
                    }
                    else 
                        {
                            $image_name="";
                        }
            //save data to DATABASE
            $sql2 = "INSERT INTO tbl_food SET
                title= '$title',
                description= '$description',
                price= $price,
                image_name= '$image_name',
                category_id= $category,
                featured= '$featured',
                active= '$active'
                
                ";

            // execution
            $res2 = mysqli_query($conn, $sql2); 
        
            if ($res2==TRUE)
            {
                $_SESSION['add']="<div class = 'sucess'>Food Added Successfully</div>";
                //redirect page
                header("location:".SITEURL.'admin/manage.food.php');
            
            }
            else
            {
                $_SESSION['add']="<div class = 'error'>Failed To Add Food</div>";
                //redirect page
                header("location:".SITEURL.'admin/manage.food.php');   
            }
        
        }

        
        

?>

<?php include('partials/footer.php');?>