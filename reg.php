<?php include 'inc/header.php'; ?>

<?php include 'inc/navbar.php'; ?>


<main role="main" class="container">
<form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
            <label for="post_image">Profile Picture</label> <img width="100" src="../images/user_pic/<?php echo $user_image; ?>" alt="image" download>
            <input type="file" name="image"> </div>

            <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                <tr>
                                    <div class="row">
                                    <div class="well">
                                    <b>Personal Information</b>
                                    </div>
                                    </div>
                                </tr>
                                    <tr>
                                        <td class="text-left" width="19%">
                                         <b>First Name</b>   
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                            <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname" autofocus>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" width="20%">
                                         <b>Last Name</b>  
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                            <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="text-left" width="20%">
                                         <b>Gander</b>   
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                            <select name="user_sex" id="" class="form-group">
                                            <option value="<?php echo $user_sex; ?>">
                                            <?php echo $user_sex; ?>
                                        </option>
                                        <?php
                                        if($user_sex == 'Male') {
                                            echo "<option value='Female'>Female</option>";
                                            } else {
                                                echo "<option value='Male'>Male</option>";
                                        }
                                    ?>
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" width="19%">
                                         <b>Birthday</b>   
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                            <input class="form-control" id="date" name="user_birthday" placeholder="<?php echo $user_birthday; ?>" value="<?php echo $user_birthday; ?>" type="date" min="1996-01-01" "1960-12-31">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" width="19%">
                                         <b>Interests</b>   
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                            <input type="text" value="<?php echo $user_interests; ?>" class="form-control" name="user_interests">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                             <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                <tr>
                                    
                                    <div class="row">
                                    <div class="well">
                                    <b>Contect Information</b>
                                    </div>
                                    </div>
                                 
                                </tr>
                                    <tr>
                                        <td class="text-left" width="19%">
                                         <b>Mobile</b>   
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                            <input type="tel" value="<?php echo $user_number; ?>" class="form-control" name="user_number">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" width="20%">
                                         <b>Email</b>  
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                            <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email" autocomplete="on">
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="text-left" width="20%">
                                         <b>City</b>   
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                            <input type="text" value="<?php echo $user_city; ?>" class="form-control" name="user_city">
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="text-left" width="20%">
                                         <b>Country</b>   
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                        <input type="text" value="<?php echo $user_country; ?>" class="form-control" name="user_country">
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="text-left" width="20%">
                                         <b>Facebook</b>   
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                        <input type="text" value="<?php echo $user_facebook; ?>" class="form-control" name="user_facebook">
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="text-left" width="20%">
                                         <b>Twitter</b>   
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                        <input type="text" value="<?php echo $user_twitter; ?>" class="form-control" name="user_twitter">
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="text-left" width="20%">
                                         <b>Instagram</b>   
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                        <input type="text" value="<?php echo $user_instagram; ?>" class="form-control" name="user_instagram">
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="text-left" width="20%">
                                         <b>Medium</b>   
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                        <input type="text" value="<?php echo $user_medium; ?>" class="form-control" name="user_medium">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" width="20%">
                                         <b>URL</b>   
                                        </td>
                                        <td class="text-left" width="1%">
                                         <b>:</b>   
                                        </td>
                                        <td class="text-left" width="80%">
                                        <input type="url" value="http://<?php echo $user_site; ?>" class="form-control" name="user_site">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                <tr widtd="90%">
                                    
                                    <div class="row">
                                    <div class="well">
                                    <b>Bio</b>
                                    </div>
                                    </div>
                                 
                                </tr>
                                    <tr>
                                        <td class="text-center" width="100%">
                                        <textarea type="text" class="form-control" name="user_bio" id="" cols="30" rows="10"><?php echo $user_bio; ?> </textarea>  
                                        </td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                    <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="edit_profile" value="Update User"> <input type="submit" formaction="demo_admin.php" value="Submit as admin"> </div>
</form>

<hr>

</main><!--/.container-->

   <?php include 'inc/footer.php'; ?>

