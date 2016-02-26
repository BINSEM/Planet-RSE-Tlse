<?php 
include ('parts/header.php');
?>

<a href="#click-contact"><button class="ui button green"><i class="contact icon"></i>Contact</button></a>

<div id="click-contact" class="modal">
	<div id="contact" class="centered six wide column">
		<a href=""><img src="../images/cross.png"></a>
		<?php include 'parts/contact-form.php' ?>
	</div>
</div>





<?php
include ('parts/footer.php');
?>