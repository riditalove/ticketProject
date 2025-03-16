<?php 
	if($role == 3) {
?>
<div>
	<h2>Congratulation <?php echo $user['Profile']['first_name']; ?>,</h2>
	
	<div>Thanks for joining Talent Exclusive. . We will start sending you personal invite to apply for the hottest modeling, promo & event jobs direct to your mobile phone soon.</div>
	
	<div>Your Talent Exclusive Login credentials is as bellow:</div>
	
	<div>
		<?php
		    echo sprintf(__('Your username: %s'), $user['Profile'] ['email']);
		    echo sprintf(__('Your password: %s'), $user['Profile'] ['email']);
		?>
	</div>
	
	<div>You should change password periodic for security reason.</div>
	
	<br /><br />
	
	<div>The Talent Exclusive Team.</div>
</div>

<?php } else { ?>

<div>
	<h2>Thank You</h2>
	
	<div>Your message is being reviewed and will be sent shortly. <br />
		We have sent you the details of this message to you inbox, along with your login so you can easily send another notice of work later. Thank you for using Talent Exclusive.
	</div>

	<div>Your Talent Exclusive Login credentials is as bellow:</div>

	<div>
		<?php
		    echo sprintf(__('Your username: %s'), $user['Profile'] ['email']);
		    echo sprintf(__('Your password: %s'), $user['Profile'] ['email']);
		?>
	</div>
	
	<div>You should change password periodic for security reason.</div>
	
	<br /><br />
	
	<div>The Talent Exclusive Team.</div>
</div>

<?php } ?>