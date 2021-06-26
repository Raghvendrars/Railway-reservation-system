	<form action="forgotpasswordprocess.php" method="post">
<div class="form-group">
<label class="iq-font-white" for="exampleInputEmail1">Enter Username or Email Address</label>
<input type="text" class="form-control" name="email" placeholder="Username or Email Address">
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