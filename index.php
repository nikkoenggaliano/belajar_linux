<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
</head>
<body>
  <form enctype="multipart/form-data" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>
<?PHP
if(!empty($_FILES['uploaded_file'])){

$path = __DIR__.'/uploaded/';

if(!is_dir($path)){
        @mkdir($path);
        @chmod($path, 0000);
        if(!is_dir($path)){
          echo "You should create your own uploaded folder<br>";
          echo "By running in your shell<br>";
          echo "<b>mkdir uploaded && chmod 000 uploaded</b>";
        }
}
        $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']).
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, The error cause permission for folder uploaded<br>Please check the permission folder uploaded or if uploaded folder not exist create manualy!";
    }
  }
?>