<?php

  $id = null;
  if(isset($_POST['id'])) {
    $id = $_POST['id'];
    // working with your file
    $myFile = "sample.txt";
    $fh = fopen($myFile, 'r');
    $myFileContents = fread($fh, 21);
    fclose($fh);
    echo $myFileContents;
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Page de lien</title>
</head>
<body>
  <br>
  <?php echo "Bienvenu $id !"; ?>
</body>
</html>
