<?php include 'inc/header.php'; ?>
<?php include 'inc/navbar.php'; ?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {$id = '1';}

?>
<?php
$query = "SELECT * FROM users WHERE id = '{$id}'";
$select_users = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_users)){
  $user_contect_number = $row['user_contect_number'];
  $user_bikas = $row['user_bikas'];
  $user_name = $row['user_name'];
  $father_name = $row['father_name'];
  $mother_name = $row['mother_name'];
  $dob = $row['dob'];
  $nid = $row['nid'];
  $dobn = $row['dobn'];
  $user_type = $row['user_type'];
  $user_dis = $row['user_dis'];
  $gender = $row['gender'];
  $village = $row['village'];
  $upzilla = $row['upzilla'];
  $zilla = $row['zilla'];
  $union = $row['union'];
  $post_office = $row['post_office'];
  $post_code = $row['post_code'];
  $pin_code = $row['pin_code'];
  $o_name = $row['o_name'];
  $o_nid = $row['o_nid'];
  $o_num = $row['o_num'];
  $m_num = $row['m_num'];
  $chairman_number = $row['chairman_number'];
  $user_image = $row['user_image'];
  $user_video = $row['user_video'];
  $chairman_cc = $row['chairman_cc'];

?>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 lead">নিজের পরিচয়<hr></div>
          </div>
          <div class="row">
      <div class="col-md-4 text-center">
              <img class="img-circle avatar avatar-original" style="-webkit-user-select:none; 
              display:block; margin:auto;" src="img/<?php echo $user_image; ?>" height="120px" width="120px">
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="only-bottom-margin"><?php echo $user_name;?></h1>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <span class="text-muted">বাবার নাম:</span> <?php echo $father_name;?><br>
                  <span class="text-muted">মায়ের নাম:</span> <?php echo $mother_name;?><br>
                  <span class="text-muted">জন্ম তারিখ:</span> <?php echo $dob;?><br>
                  <span class="text-muted">মোবাইল:</span> <?php echo $user_contect_number;?><br>
                  <span class="text-muted">বিবরণ:</span><br><br>
                  <small class="text-muted">: <?php echo $user_dis;?></small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 lead">অন্যান্য তথ্য<hr></div>
          </div>
          <div class="row">
      <div class="col-md-4 text-center">

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header bg-success">
      <h5 class="modal-title" id="exampleModalLabel">Playing Video</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
    <video width="320" height="240" controls>
  <source src="img/<?php echo $user_video; ?>" type="video/mp4">
Your browser does not support the video tag.
</video>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
              <a href="img/<?php echo $user_video;?>" data-toggle="modal" data-target="#myModal"><img class="img-circle avatar avatar-original" style="-webkit-user-select:none; 
              display:block; margin:auto;" src="img/images.png" height="120px" width="120px"></a>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-6">
                  <span class="text-muted">অভিভাবকের নাম্বার:</span> <?php echo $o_num;?><br>
                  <span class="text-muted">অভিভাবকের NID:</span> <?php echo $o_nid;?><br>
                  <span class="text-muted">চেয়্যারম্যানের নাম্বার:</span> <?php echo $chairman_number;?><br>
                  <span class="text-muted">গ্রাম প্রতিনিধির নাম্বার:</span> <?php echo $m_num;?><br>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <hr><a href="img/<?php echo $chairman_cc;?>"><button class="btn btn-default pull-right"><i class="glyphicon glyphicon-pencil"></i> চেয়্যারম্যান এর সার্টিফিকিট দেখুন</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 lead">সাহার্য্য পাঠান<hr></div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-6">
                <table>
                <tr><td><img src="img/bikas.png" alt=""></td><td>--------</td><td><img src="img/roktet.png" alt=""></td></tr>
                <tr><td align="center"><b style="color:red;"><?php echo $user_bikas;?></b></td><td></td></tr></table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <?php 
}
?> 
<!--/.container-->

   <?php include 'inc/footer.php'; ?>

