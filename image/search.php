<?php

  include 'config.php';
  $search = $_POST['search'];
  $stmt = $conn->prepare("SELECT * FROM domain WHERE domain_name LIKE CONCAT('%','?','%');
  $stmt -> bind_param('s',$search);
  $stmt ->execute();
  $result = $stmt ->get_result();
  if ($result -> num_rows >0) {
    echo 'Domain not available';
  }
  else {
    echo 'Domain available';
  
  }

  ?>