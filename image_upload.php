<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="video_upload.css">
    <?php
  include 'ConnectDatabase.php';
  if (!isset($_SESSION))
  {
    session_start();
  }
  $acc_id=$_SESSION['id'];
  $sql_choose = "select * from account_details where account_id=$acc_id";
  $result_choose=mysqli_query($conn,$sql_choose);
  $row_choose = mysqli_fetch_assoc($result_choose);
  $acc_type1=$row_choose['account_type'];
  if(strcasecmp($acc_type1,"admin")==0)
  {
    include 'admin_navbar.php';
  }
  else{
    include 'reg_user_navbar.php';
  }
     if(isset($_POST['but_upload'])){
         $maxsize = 5242880000;

         $name = $_FILES['file']['name'];
         $target_dir = "Images/";
         $target_file = $target_dir . $_FILES["file"]["name"];

         // Select file type
         $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

         // Valid file extensions
         $extensions_arr = array("jpeg","png","svg","jpg");

         // Check extension
         if( in_array($videoFileType,$extensions_arr) ){

             // Check file size
             if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                 echo "File too large. File must be less than 5MB.";
             }else{
                 // Upload
                 if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                     // Insert record
                     $acc_id=$_SESSION['id'];
                     $tit=$_POST['title'];
                     $desc=$_POST['description'];
                     $query = "INSERT INTO content(name,location,author_id,media_type,title,description) VALUES('".$name."','".$target_file."',$acc_id,'image','".$tit."','".$desc."')";

                     $res=mysqli_query($conn,$query);
                     if($res)
                     {
                        echo "<script>alert('Uploaded Successfully!')</script>";
                     }
                     else{
                       echo("Error description: " . mysqli_error($conn));
                     }

                 }
             }

         }else{
             echo "Invalid file extension.";
         }

     }
     ?>
  </head>
  <body>
    <!-- <div class="upload_it">
      <form method="post" action="" enctype='multipart/form-data'>
                  <input type='file' name='file' />
                  <input type='submit' value='Upload' name='but_upload'>
      </form>
    </div> -->
    <form action="" method="post" enctype="multipart/form-data">

      <h1><strong>Upload Image</strong></h1>

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-controll" required="required"/>
      </div>
      <div class="form-group">
        <label for="caption">Description</label>
        <input type="text" name="description" id="caption" class="form-controll" required="required"/>
      </div>

      <div class="form-group file-area">
            <label for="images">Choose your image here</label>
        <input type="file" name="file" id="images" required="required" accept="image/x-png,image/gif,image/jpeg,image/*"/>
        <div class="file-dummy">
          <!-- <div class="success">Great, your files are selected. Keep on.</div> -->
          <div class="default">Please select some files</div>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" value='Upload' name='but_upload'>Upload image</button>
      </div>

    </form>






    <link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>
  </body>
</html>
