<?php 
include "config.php";
$domain=$_GET['add'];

if(isset($_POST['submit'])){

  $query="INSERT INTO  domain(domain_name)values('$domain')";
  $result=mysqli_query($conn,$query) or die("Query Failed");
  if($result){
    echo " successfully purchased";
  }
  else
    echo"error";
}
if(isset($_POST['cancel'])){
	header("location:index.php");}
?>


 <form action="" method="post">
  <input type="hidden" name="address" value="<?php echo $domain;?>" />

  <input type="submit" name="cancel"value="Cancel" />
  <input type="submit" name="submit"value="Buy" />
</form>