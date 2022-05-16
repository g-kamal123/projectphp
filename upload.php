<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $file_error = $_FILES['file']['error'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_upload = 'upload/'.$file_name;
        move_uploaded_file($file_tmp,$file_upload);
        $_SESSION[$_FILES['file']['name']] = $file_upload;
    }
    
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="file" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
 <div style="display:flex; width:100vw; flex-wrap:wrap; padding-top:10px;">
   <?php foreach($_SESSION as $key=> $val){?>
    <p><img src='<?php echo $val; ?>' alt="" style="height: 100px; width:100px"><br>
  <?php echo $key;?></p>
   <?php } ?>
</div>
</body>
</html>