<?php  session_start();
if(empty($_SESSION['email']))
{
 header("location:index.php");
}

//require_once "header/header.php";
?>
<div class="container">
<br>
<br>
<h1>WELCOME :<?php echo $_SESSION['email']; ?></h1>

<a href="logout.php">Logout</a>

</div>
<?php
require_once "footer/footer.php";
?>