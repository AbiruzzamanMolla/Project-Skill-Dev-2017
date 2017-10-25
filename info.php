<?php include 'inc/header.php'; ?>
<?php include 'inc/navbar.php'; ?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {$id = '1';}

// switch($source){
//     case 'edit_comment';
//         include "includes/edit_comment.php";
//         break;

//     default:
//         include "includes/view_all_comments.php";
//         break;
// }
?>
<?php
$query = "SELECT * FROM users WHERE id = '{$id}'";
$select_users = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_users)){
  $name = $row['user_name'];
  $user_image = $row['user_image'];
  $age = $row['dob'];
  $user_dis = $row['user_dis'];
  $number = $row['user_contect_number'];

?>
    <main role="main" class="container">

    <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-12 col-md-9">
              <p class="float-right d-md-none">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
              </p>
              <div class="row">
                                <!-- list with photo -->
    <div class="col-sm-6">
      <p><img src="img/<?php echo $user_image; ?>" alt="" height="500px" width="400px"></p>
    </div>
    <div class="col-sm-6">
      <p>
      <b>নামঃ</b> <?php echo $name; ?><br>
      <b>বয়সঃ</b> <?php echo $age; ?><br>

      <b>বর্ননাঃ </b> <?php echo $user_dis; ?><br>
      <br><br>
      <img src="img/dividing-line.png" alt=""><br><br>
      <button type="" class="btn btn-info"><?php echo $number; ?></button>  
      </p>
    </div>
          </div><!--/row-->
        </div><!--/span-->

     <?php include 'inc/sidebar.php'; ?>
      </div><!--/row-->

      <hr>

    </main>
    <?php 
}
?> 
<!--/.container-->

   <?php include 'inc/footer.php'; ?>

