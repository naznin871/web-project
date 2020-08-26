<?php
include 'header.php';
include'config.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $phn_num=$_POST['phn_number'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $query="INSERT INTO  contact(name,phn_number,email,message)values('$name','$phn_num','$email','$message')";
  $result=mysqli_query($conn,$query) or die("Query Failed");
  if($result){
    echo "<script>
        alert('Message sent Successfully');
        window.location.href='contact.php';
        </script>";
  }
  else
    echo"<script>
        alert('Error Message');
        window.location.href='contact.php';
        </script>";
}
?>
<section id="contact">
  <div class="container text-center">
    <h1>Get In Touch</h1>
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
include 'footer.php';
?>