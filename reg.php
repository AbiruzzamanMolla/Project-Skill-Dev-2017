<?php
include "inc/db.php";

if(isset($_POST['submit'])){
  $user_contect_number = $_POST['user_contect_number'];
  $user_bikas = $_POST['user_bikas'];
  $user_name = $_POST['user_name'];
  $father_name = $_POST['father_name'];
  $mother_name = $_POST['mother_name'];
  $dob = $_POST['dob'];
  $nid = $_POST['nid'];
  $dobn = $_POST['dobn'];
  $user_type = $_POST['user_type'];
  $user_dis = $_POST['user_dis'];
  $gender = $_POST['gender'];
  $village = $_POST['village'];
  $upzilla = $_POST['upzilla'];
  $zilla = $_POST['zilla'];
  $union = $_POST['union'];
  $post_office = $_POST['post_office'];
  $post_code = $_POST['post_code'];
  $pin_code = $_POST['pin_code'];
  $o_name = $_POST['o_name'];
  $o_nid = $_POST['o_nid'];
  $o_num = $_POST['o_num'];
  $m_num = $_POST['m_num'];
  $chairman_number = $_POST['chairman_number'];


  $user_image = $_FILES['image']['name'];
  $user_image_temp = $_FILES['image']['tmp_name'];
  move_uploaded_file($user_image_temp, "img/$user_image");
  
 
  $user_video = $_FILES['user_video']['name'];
  $user_video_temp = $_FILES['user_video']['tmp_name'];
  move_uploaded_file($user_video_temp, "img/$user_video");



  $chairman_cc = $_FILES['chairman_cc']['name'];
  $chairman_cc_temp = $_FILES['chairman_cc']['tmp_name'];
  move_uploaded_file($chairman_cc_temp, "img/$chairman_cc");

$query = "INSERT INTO `users` (`user_contect_number`, `user_bikas`, `user_name`, `father_name`, `mother_name`, `dob`, `nid`, `dobn`, `user_type`, `user_dis`, `gender`, `village`, `upzilla`, `zilla`, `union`, `post_office`, `post_code`, `pin_code`, `o_name`, `o_nid`, `o_num`, `m_num`, `chairman_number`, `user_image`, `user_video`, `chairman_cc`) VALUES ('{$user_contect_number}', '{$user_bikas}', '{$user_name}', '{$father_name}', '{$mother_name}', '{$dob}', '{$nid}', '{$dobn}', '{$user_type}', '{$user_dis}', '{$gender}', '{$village}', '{$upzilla}', '{$zilla}', '{$union}', '{$post_office}', '{$post_code}', '{$pin_code}', '{$o_name}', '{$o_nid }', '{$o_num}', '{$m_num}', '{$chairman_number}', '{$user_image}', '{$user_video}', '{$chairman_cc}')";

$sql = mysqli_query($connection, $query);
if(!$sql){
  echo "Problems".mysqli_error($connection);
}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="style/favicon.ico">

    <title>Our website</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
<!--    <link rel="stylesheet" href="//d2d3qesrx8xj6s.cloudfront.net/dist/bootsnipp.min.css?ver=872ccd9c6dce18ce6ea4d5106540f089">-->
<link rel="stylesheet" href="https://bootsnipp.com/dist/bootsnipp.min.css">
<link rel="stylesheet" href="style/file/css/fileinput.min.css">
<link rel="stylesheet" href="style/file/css/fileinput.css">
<link rel="stylesheet" href="style/file/css/fileinput-rtl.min.css">
<link rel="stylesheet" href="style/file/css/fileinput-rtl.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
<!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
<!-- optionally uncomment line below if using a theme or icon set like font awesome (note that default icons used are glyphicons and `fa` theme can override it) -->
<!-- link https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css media="all" rel="stylesheet" type="text/css" /-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- piexif.min.js is only needed for restoring exif data in resized images and when you 
    wish to resize images before upload. This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/piexif.min.js" type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
    This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/sortable.min.js" type="text/javascript"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for 
    HTML files. This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/purify.min.js" type="text/javascript"></script>
<!-- popper.min.js below is needed if you use bootstrap 4.x. You can also use the bootstrap js 
   3.3.x versions without popper.min.js. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
    dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
<!-- the main fileinput plugin file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
<!-- optionally uncomment line below for loading your theme assets for a theme like Font Awesome (`fa`) -->
<!-- script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/themes/fa/theme.min.js"></script -->
<!-- optionally if you need translation for your language then include  locale file as mentioned below -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/locales/LANG.js"></script>


<style type="text/css">
.playground-editor {
height: 100%;
width: 100%;
}
.halfheight {
padding: 0;
}
h1 {
margin: 0;
margin-left: 10px;
}
</style> 
  </head>
    <body>

      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">মানবতার আত্নপ্রকাশ</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="./">হোম পেইজ</a></li>
              <li class="active"><a class="btn disabled" href="./">আবেদন করুন</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">পুনরায় চালু করুন</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

      <div class="container">
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" accept-charset="utf-8">
        <fieldset>
          <div class="row">
            <div class="col-md-2 panel panel-heading">Contact Information</div>
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="contact_error"></div>
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="mobile">যোগাযোগের নাম্বার</label>
            <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-addon">
                <i class="glyphicon glyphicon-phone"></i>
                </span>
                  <input id="user_contect_number" maxlength="10" name="user_contect_number" placeholder="xxxxxxxxxxxx" class="form-control input-md ac_mobile" type="number" value={{mobile}} >
            
                </div>
            </div>
            <label class="col-md-1 control-label" for="sms">বিকাশ/রকেট নাম্বার</label>
            <div class="col-md-3">
        <div class="input-group">
            <span class="input-group-addon">
            <i class="glyphicon glyphicon-phone"></i>
            </span>
              <input id="user_bikas" maxlength="10" name="user_bikas" placeholder="xxxxxxxxxxxx" class="form-control input-md ac_mobile" type="number" value={{mobile}} >
            </div>
        </div>
            <div class="col-md-1">
              <a id="add_mobile" onclick=add_mobile()><i class="glyphicon glyphicon-plus"></i></a>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-8" id="mobile_numbers"></div>
          </div>
<!-- adding fields -->
          <div class="row form-group">
            <label class="col-md-1 control-label" for="first_name">নিজের নাম</label>  
            <div class="col-md-2">
            <div class="input-group">
            <span class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i>
            </span>
              <input id="user_name" name="user_name" placeholder="" class="form-control input-md" type="text">
            </div></div>

            <label class="col-md-1 control-label" for="middle_name">পিতার নাম</label>  
            <div class="col-md-2">
            <div class="input-group">
            <span class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i>
            </span>
              <input id="father_name" name="father_name" placeholder="" class="form-control input-md" type="text">
            </div>
        </div>
            <label class="col-md-1 control-label" for="last_name">মাতার নাম</label>  
            <div class="col-md-2">
            <div class="input-group">
            <span class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i>
            </span>
              <input id="mother_name" name="mother_name" placeholder="" class="form-control input-md" type="text">
            </div>
    </div>
          </div>

          <div class="row form-group">
            <label class="col-md-1 control-label" for="first_name">জন্ম তারিখ</label>  
            <div class="col-md-2">
            <div class="input-group">
            <span class="input-group-addon">
            <i class="glyphicon glyphicon-list"></i>
            </span>
              <input id="dob" name="dob" placeholder="" class="form-control input-md" type="text">
            </div></div>

            <label class="col-md-1 control-label" for="middle_name">NID নাম্বার</label>  
            <div class="col-md-2">
            <div class="input-group">
            <span class="input-group-addon">
            <i class="glyphicon glyphicon-list"></i>
            </span>
              <input id="nid" name="nid" placeholder="" class="form-control input-md" type="text">
            </div>
        </div>
            <label class="col-md-1 control-label" for="last_name">জন্ম সনদ নং</label>  
            <div class="col-md-2">
            <div class="input-group">
            <span class="input-group-addon">
            <i class="glyphicon glyphicon-list"></i>
            </span>
              <input id="dobn" name="dobn" placeholder="" class="form-control input-md" type="text">
            </div>
    </div>
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="farmer_type">সাহায্যের ধরণ</label>
            <div class="col-md-4">
              <label class="radio-inline"><input type="radio" name="user_type" value="Farmer" checked>মেধাবী শিক্ষাথী</label>
              <label class="radio-inline"><input type="radio" name="user_type" value="Politician">হতদরিদ্র</label>
            </div>

            <label class="col-md-1 control-label" for="description">নিজের বর্ননা</label>
            <div class="col-md-4">
            <div class="input-group">
            <span class="input-group-addon">
            <i class="glyphicon glyphicon-pencil"></i>
            </span>
              <textarea class="form-control" id="user_dis" name="user_dis" placeholder="Description"></textarea>
            </div></div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" for="smartphone">লিঙ্গ</label>
            <div class="col-md-3">
        
                <label class="radio-inline"><input type="radio" name="gender" value=true>পুরুষ</label>
                <label class="radio-inline"><input type="radio" name="gender" value=false>মহিলা</label>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-md-2 panel panel-heading">যোগাযোগের ঠিকানা</div>
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="address_error"></div>
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="village">গ্রাম</label>
            <div class="col-md-2">
        <div class="input-group">
            <span class="input-group-addon">
            <i class="glyphicon glyphicon-home"></i>
            </span>

              <input id="village" name="village" placeholder="" class="form-control input-md ac_village" required="" type="text">
            </div> </div>

            <label class="col-md-1 control-label" for="state">উপজেলা</label>
            <div class="col-md-2">
        <div class="input-group">
            <span class="input-group-addon">
            <i class="glyphicon glyphicon-list"></i>
            </span>

              <input id="upzilla" name="upzilla" placeholder="" class="form-control input-md ac_state" required="" type="text">
            </div></div>

            <label class="col-md-1 control-label" for="district">জেলা</label>
            <div class="col-md-2">
        <div class="input-group">
            <span class="input-group-addon">
            <i class="glyphicon glyphicon-list"></i>
            </span>

              <input id="zilla" name="zilla" placeholder="" class="form-control input-md ac_district" required="" type="text">
            </div>
        </div>
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="taluka">ইউনিউন</label>  
            <div class="col-md-2">
              <input id="union" name="union" placeholder="" class="form-control input-md ac_taluka" required="" type="text">
            </div>

            <label class="col-md-1 control-label" for="other_taluka">ডাক ঘর</label>  
            <div class="col-md-2">
              <input id="post_office" name="post_office" class="form-control input-md ac_taluka" type="text">
            </div>

            <label class="col-md-1 control-label" for="post_office">ডাকঘর নাম্বার</label>  
            <div class="col-md-2">
              <input id="post_code" name="post_code" placeholder="" class="form-control input-md ac_post_office" required="" type="text">
            </div>
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="pin_code">Pin Code</label>  
            <div class="col-md-2">
              <input id="pin_code" name="pin_code" placeholder="" class="form-control input-md" required="" type="text">
            </div>

            
          </div>

          <div class="row">
            <div class="col-md-2 panel panel-heading">অন্যান্য তথ্য</div>
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="address_error"></div>
          </div>

          <div class="row form-group">
          <label class="col-md-1 control-label" for="first_name">অভিভাবকের নাম</label>  
          <div class="col-md-2">
          <div class="input-group">
          <span class="input-group-addon">
          <i class="glyphicon glyphicon-user"></i>
          </span>
            <input id="o_name" name="o_name" placeholder="" class="form-control input-md" type="text">
          </div></div>

          <label class="col-md-1 control-label" for="middle_name">অভিভাবকের NID</label>  
          <div class="col-md-2">
          <div class="input-group">
          <span class="input-group-addon">
          <i class="glyphicon glyphicon-user"></i>
          </span>
            <input id="o_nid" name="o_nid" placeholder="" class="form-control input-md" type="text">
          </div>
      </div>
          <label class="col-md-1 control-label" for="last_name">অভিভাবকের যোজাযোগ নম্বর</label>  
          <div class="col-md-2">
          <div class="input-group">
          <span class="input-group-addon">
          <i class="glyphicon glyphicon-user"></i>
          </span>
            <input id="o_num" name="o_num" placeholder="" class="form-control input-md" type="text">
          </div>
  </div>
        </div>

        <div class="row form-group">
          <label class="col-md-1 control-label" for="first_name">গ্রাম প্রতিনিধির নাম্বার</label>  
          <div class="col-md-2">
          <div class="input-group">
          <span class="input-group-addon">
          <i class="glyphicon glyphicon-list"></i>
          </span>
            <input id="m_num" name="m_num" placeholder="" class="form-control input-md" type="text">
          </div></div>

          <label class="col-md-1 control-label" for="middle_name">চেয়্যারম্যানের নাম্বার</label>  
          <div class="col-md-2">
          <div class="input-group">
          <span class="input-group-addon">
          <i class="glyphicon glyphicon-list"></i>
          </span>
            <input id="chairman_number" name="chairman_number" placeholder="" class="form-control input-md" type="text">
          </div>
      </div>
      </div>
      <div class="row form-group">
      <label class="col-md-1 control-label" for="first_name">চেয়্যারম্যান সাটিফিকিট কপি</label>  
      <div class="col-md-6">
      <div class="input-group">
      <span class="input-group-addon">
      <i class="glyphicon glyphicon-user"></i>
      </span>
      <input id="chairman_cc" name="chairman_cc" type="file" class="file">
      </div></div>
        </div>


        <div class="row">
            <div class="col-md-2 panel panel-heading">ডিজিটাল তথ্য</div>
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="address_error"></div>
          </div>

          <div class="row form-group">
          <label class="col-md-1 control-label" for="image">নিজের ছবি</label>  
          <div class="col-md-6">
          <div class="input-group">
          <span class="input-group-addon">
          <i class="glyphicon glyphicon-user"></i>
          </span>
          <input type="file" name="image" class="file">
          </div></div>

          <label class="col-md-1 control-label" for="last_name">পরিচিতি ভিডিও</label>  
          <div class="col-md-3">
          <div class="input-group">
          <span class="input-group-addon">
          <i class="glyphicon glyphicon-user"></i>
          </span>
          <input id="user_video" name="user_video" type="file" class="file">
          </div>
        </div>
        </div>

          <div class="form-group row">
            <div class="col-md-8 text-center">
            <center><input type="submit" name="submit" id="btn btn-login" class="btn btn-custom btn-lg btn-block" value="Register"></center>
              <!-- <button id="save" name="save" class="btn btn-large btn-success"> Save Farmer Information</button>
              <button class="btn btn-large btn-danger" type="button" onclick=history.go(-1)> Cancel </button> -->
            </div>
          </div>
          </fieldset>
        </form>
      </div>
</body>
</html>
