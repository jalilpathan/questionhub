<?php
require_once("class.user.php");
$auth_user = new USER();
if(isset($_POST['signin'])){
$email = $_POST['email'];
$pass = $_POST['pass'];
$data = $auth_user->runFun("SELECT * FROM `user` WHERE Email = '$email' && Password = '$pass'");
if($data->rowCount()>0)
{
	session_start();
	$_SESSION['email'] = $email;
	header('location:profile.php');
}else{
echo "<script>alert('Account not found');</script>";	
}
}
if(isset($_POST['signup'])){
 $uname = $_POST['uname'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 
if($auth_user->runFun("INSERT INTO `user`(`Username`, `Email`, `Password`) VALUES ('$uname','$email','$pass')"))
{
echo "<script>alert('Account Created');</script>";
}
}


?>

<div id="id01" class="modal">
  
  <form class="modal-content animate form-horizontal" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
	<h1>Login</h1>
	<p>Please fill to get into your Account.</p>
	  
	  
	  <div class="form-group">
      <label class="control-label col-sm-2"  for="uname"><b>Username</b></label>
        <div class="col-sm-3">
	  <input type="text" class="form-control" placeholder="Enter Username" name="email" required>
	  </div>
	  </div>
	  
	  
	  <div class="form-group">
      <label class="control-label col-sm-2"  for="psw"><b>Password</b></label>
        <div class="col-sm-3">
	  <input type="text" class="form-control" placeholder="Enter Password" name="pass" required>
	  </div>
	  </div>
	  
       
	   
	   	   
	  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-3">
        <button type="submit" class="btn btn-primary" name="signin">Submit</button>
      </div>
    </div>
	

	
    </div>

  </form>
</div>


<div id="id02" class="modal">
  
  <form class="modal-content animate form-horizontal" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      
	  
	  <div class="form-group">
      <label class="control-label col-sm-2"  for="uname"><b>Username</b></label>
        <div class="col-sm-3">
	  <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>
	  </div>
	  </div>
	  
	  <div class="form-group">
      <label class="control-label col-sm-2"  for="email"><b>Email</b></label>
        <div class="col-sm-3">
	  <input type="text" class="form-control" placeholder="Enter Email" name="email" required>
	  </div>
	  </div>
	  
      <div class="form-group">
      <label class="control-label col-sm-2"  for="psw"><b>Password</b></label>
        <div class="col-sm-3">
	  <input type="text" class="form-control" placeholder="Enter Password" name="pass" required>
	  </div>
	  </div>

    
      <div class="clearfix">
	  
	  
	  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-3">
        <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
      </div>
    </div>
	
	 </div>
  </form>
</div>


