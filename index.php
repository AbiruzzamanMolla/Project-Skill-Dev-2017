<?php include 'inc/header.php'; ?>

<?php include 'inc/navbar.php'; ?>

<?php include 'inc/head_image.php'; ?>
<?php include 'inc/pop_up.php'; ?>



    <main role="main" class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">
          <p class="float-right d-md-none">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row">
          <?php
        $query = "SELECT * FROM users WHERE user_type = 'student' ORDER BY id DESC LIMIT 0,3";
        $select_users = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($select_users)){
          $id = $row['id'];
          $name = $row['user_name'];
          $user_image = $row['user_image'];
          $user_dis = substr($row['user_dis'],0,70);
        ?>
<!-- list with photo -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/<?php echo $user_image; ?>" alt="Generic placeholder image" width="140" height="140">
            <a href="info?id=<?php echo $id; ?>" data-toggle="tooltip" data-placement="right" title="Hooray!"><h2><?php echo $name; ?></h2></a>
            <p><?php echo $user_dis; ?></p>
            <p><a class="btn btn-secondary" href="info?id=1" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
           <!-- end of list with photo -->
         <?php }
      ?>
</div><!--/row-->

<div class="row">
          <?php
        $query = "SELECT * FROM users WHERE user_type = 'rugi' ORDER BY id DESC LIMIT 0,3";
        $select_users = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($select_users)){
          $id = $row['id'];
          $name = $row['user_name'];
          $user_image = $row['user_image'];
          $user_dis = substr($row['user_dis'],0,70);
        ?>
<!-- list with photo -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/<?php echo $user_image; ?>" alt="Generic placeholder image" width="140" height="140">
            <a href="info?id=<?php echo $id; ?>" data-toggle="tooltip" data-placement="right" title="Hooray!"><h2><?php echo $name; ?></h2></a>
            <p><?php echo $user_dis; ?></p>
            <p><a class="btn btn-secondary" href="info?id=1" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
           <!-- end of list with photo -->
         <?php }
      ?>
</div><!--/row-->
<div class="row">
          <?php
        $query = "SELECT * FROM users WHERE user_type = 'atim' ORDER BY id DESC LIMIT 0,3";
        $select_users = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($select_users)){
          $id = $row['id'];
          $name = $row['user_name'];
          $user_image = $row['user_image'];
          $user_dis = substr($row['user_dis'],0,70);
        ?>
<!-- list with photo -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/<?php echo $user_image; ?>" alt="Generic placeholder image" width="140" height="140">
            <a href="info?id=<?php echo $id; ?>" data-toggle="tooltip" data-placement="right" title="Hooray!"><h2><?php echo $name; ?></h2></a>
            <p><?php echo $user_dis; ?></p>
            <p><a class="btn btn-secondary" href="info?id=1" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
           <!-- end of list with photo -->
         <?php }
      ?>
</div><!--/row-->

<div class="row">
          <?php
        $query = "SELECT * FROM users WHERE user_type = 'old' ORDER BY id DESC LIMIT 0,3";
        $select_users = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($select_users)){
          $id = $row['id'];
          $name = $row['user_name'];
          $user_image = $row['user_image'];
          $user_dis = substr($row['user_dis'],0,70);
        ?>
<!-- list with photo -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/<?php echo $user_image; ?>" alt="Generic placeholder image" width="140" height="140">
            <a href="info?id=<?php echo $id; ?>" data-toggle="tooltip" data-placement="right" title="Hooray!"><h2><?php echo $name; ?></h2></a>
            <p><?php echo $user_dis; ?></p>
            <p><a class="btn btn-secondary" href="info?id=1" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
           <!-- end of list with photo -->
         <?php }
      ?>
</div><!--/row-->

        </div><!--/span-->
     <?php include 'inc/sidebar.php'; ?>
      </div><!--/row-->

      <hr>

    </main><!--/.container-->

   <?php include 'inc/footer.php'; ?>

