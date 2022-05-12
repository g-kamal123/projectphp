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

        $file_exten = explode('.',$file_name);
       
        $file_extension = strtolower(end($file_exten));
        if($file_extension == 'png'){
         
          if($file_error === 0){

            if($file_size < 2000000){
              $file_upload = 'upload/'.$file_name;
             $a = move_uploaded_file($file_tmp,$file_upload);
              if($a){
                 $result = "image uploaded";
              }
              else $result = "can't upload image";             
            }
            else{
              $result = "size of image is more than 2mb";
            }
          }
          else{
            $result = "unknown error occur";
          }
        }
        else{
          $result = "enter image of png type only";
        }
    }
    
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="file" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
<p><?php echo $result; ?></p>

</body>
</html>