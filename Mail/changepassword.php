<?php session_start(); ?>

<form action="changepasswordprocess.php" method="post">
<div class="form-group">
<input type="Password" class="form-control" name="password" placeholder="Enter Password">
<p></p>
<input type="Password" class="form-control" name="cpassword" placeholder="Confirm Password">
<?php
        if(isset($_SESSION['loginerror'])){
        	echo '<p></p>';
        	echo '<div class="alert alert-danger" role="alert">'.
$_SESSION['loginerror']
.'</div>';
          unset($_SESSION['loginerror']);
        }
?>
</div>
<button type="submit" name="btn" class="button iq-mt-40">Submit</button>
</form>
