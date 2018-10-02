<?php

  include "dbconnect.php";

  global $con;
  $id = $_POST['id'];
  $qry = "DELETE FROM images WHERE id=$id";
  $result = mysqli_query($con, $qry);
  if($result){
    echo "Image deleted.";
  }
  else{
    echo "Image not deleted.";
  }
?>