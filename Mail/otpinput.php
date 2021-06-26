<?php session_start(); ?>
<h2 class="title iq-tw-6">Forgot Password</h2><br>
<p style="font-size: 20px;" align="Center">Enter the OTP</p><br>
<form action="otpinputprocess.php" method="post">
<div class="form-group">
<label class="iq-font-white">Hello, <?php echo $_SESSION['name']; ?></label><br>
<label class="iq-font-white" for="exampleInputEmail1">Please Enter OTP sent on <?php echo $_SESSION['email']; ?></label>
<input type="text" class="form-control" name="otp" placeholder="6 Digit OTP">
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