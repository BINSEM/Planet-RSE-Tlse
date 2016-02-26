<?php 
include ('parts/header.php');
?>



<div class="ui centered grid">
	<div id="contactez-nous" class="fields">
		<div class="field">
			<p>
				Pour nous contacter, faire une suggestion ou participer à nos ateliers,<br />
				cliquez sur le bouton ci-dessous et remplissez le formulaire.		
			</p>
		</div>
		<div id="contact-button" class="field">
			<a href="#click-contact"><button class="ui button green">Contact</button></a>
			<h2>test</h2>
		</div>
	</div>
</div>
<div id="click-contact" class="modal">
	<div id="contact" class="centered six wide column">
		<a href=""><img src="../images/cross.png"></a>
		<?php include 'parts/contact-form.php' ?>
	</div>
</div>





<?php
include ('parts/footer.php');
?>