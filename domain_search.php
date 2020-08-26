<?php
include 'header.php';
include'config.php';

  if(isset($_POST['submit'])){
  if($_POST['search']==null){
    header("location:domain_search.php");
  }
  else{
    
  $search_key=$_POST['search'];
  if(filter_var($search_key,FILTER_VALIDATE_URL)==true){
    
    $query="SELECT * FROM domain WHERE domain_name  LIKE '%$search_key%'";
    $result=mysqli_query($conn,$query) or die("Failed");
    $count=mysqli_num_rows($result);
   
  if($count>0){
    echo "<script>
        alert('Domain not available');
        window.location.href='domain_search.php';
        </script>";}
    else{
      
      echo "<script>
        alert('Domain available');
        window.location.href='insert.php?add=$search_key';
        </script>";

    }
} else{
  echo "<script>
        alert('Sorry,invalid url');
        window.location.href='domain_search.php';
        </script>";}
    
    
  }
 

    
}
 ?>

<div class="domain1">
  <form action="" method="POST">
    <h1>It All <span>Starts With </span>A Domain name</h1>
    <div class="form-box">
      <input type="text" name="search" class="search-field business" placeholder="Search your domain name.."/>
    <button class="search-btn" type="submit" name="submit">Search</button>
      
    </div>
   
  </form>
</div>
<section id="privacy">
  <div class="container">
      <div class="row services">
        <div class="col-md-3 text-content">

      <div class="icon">
        <i class="fa fa-keyboard-o"></i>
      </div>
      <h3>Choose the right domain</h3>
      <p>We offer over 300 domain extensions, from .best to .blog and beyond! 
        You're not limited to just .com or .net anymore

</p>
      </div>
      <div class="col-md-3 text-content">

    <div class="icon">
      <i class="fa fa-eye"></i>
    </div>
    <h3>Protect your privacy</h3>
    <p>With Domain Privacy, which we offer on select domains, you can keep your personal contact information private.

</p>
    </div>
    <div class="col-md-3 text-content">

  <div class="icon">
    <i class="fa fa-file-o"></i>
  </div>
  <h3>Automatically Renew</h3>
  <p>Domains registered through or transferred to softland will renew automatically. This keeps your domain from expiring by accident or human error.

</p>
  </div>
  <div class="col-md-3 text-content">

  <div class="icon">
    <i class="fa fa-cog"></i>
  </div>
  <h3>Easy Management</h3>
  <p>Once you use our domain name lookup and find a suitable web address, you can manage your site through a simple interface. Managed your domain and all of its aspects from an easy-to-use control panel. Change DNS records easily across multiple domains.

</p>
  </div>


</section>
<?php
include'config.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $phn_num=$_POST['phn_number'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $query="INSERT INTO  contact(name,phn_number,email,message)values('$name','$phn_num','$email','$message')";
  $result=mysqli_query($conn,$query) or die("Query Failed");
  if($result){
    echo "insert variable successfully";
  }
  else
    echo"error";
}
?>
<section id="contact">
  <div class="container text-center">
    
    <div class="row">
      <div class="col-md-6">
        <form action="contact.php" method="post" class="contact-form">
          <div class="form-group">
            <input type="text"class="form-control"name="name"placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="number"class="form-control" name="phn_number"placeholder="Phone Number">
          </div>
          <div class="form-group">
            <input type="email"class="form-control" name="email" placeholder="Email id">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="4" name="message" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">SEND MESSAGE</button>
        </form>
      </div>
      <div class="col-md-6 contact-info">
<div class="follow"> <b>Address:</b><i class="fa fa-map-marker"></i>XYZ Road,Dhaka</div>
<div class="follow"><b>Phone:</b><i class="fa fa-phone"></i>+88012345678</div>
<div class="follow"><b>Email:</b><i class="fa fa-envelope-o"></i>example@website.com</div>
<div class="follow"><label><b>Get Social:</b></label>
  <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-youtube-play"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
</div>
      </div>
    </div>
  </div>
</section>

<?php
include'footer.php';

?>
