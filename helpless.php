<?php include 'inc/header.php'; ?>

<?php include 'inc/navbar.php'; ?>
<?php include 'inc/pop_up.php'; ?>

<div class="container">
    <div class="row">
        <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM users WHERE user_type = 'rugi' ORDER BY id DESC";
        $select_users = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($select_users)){
          $id = $row['id'];
          $name = $row['user_name'];
          $user_image = $row['user_image'];
          $dob = $row['dob'];
          $user_dis = substr($row['user_dis'],0,70);
        ?>
            <tr>
            <td align="left" width="20%"><img src="img/<?php echo $user_image; ?>" alt="" class="" hight="120px" width="120px">
            </td>
            <td align="left" width="80%">
            <p>নামঃ <a href="info?id=<?php echo $id; ?>"><?php echo $name; ?></a><br>
            জন্ম তারিখঃ <?php echo $dob; ?><br>
            সাহায্যের কারনঃ <?php echo $user_dis; ?></p>
            </td>
            </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
</div>


   <?php include 'inc/footer.php'; ?>

