

<!DOCTYPE html>
	<html>
		<head>
			<title>Contact</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="../css/style.css">
		</head>
		<body>
			<header>
					<h1>Blokyt_</h1>	
			</header>
			<ul>
				<li>
					<a class="a1" href="../index.html">Menu</a> 
				</li>
				<li>
					<a class="a2" href="presentation.html">Présentation</a> 				
				</li>
				<li>
					<a class="a3" href="">Jeux</a> 
				</li>
				<li>
					<a class="a4" href="">Passions</a> 
				</li>
				<li>
					<a class="a5 own" href="../html/contact.html">Contact</a>
				</li>
			</ul>
			<article>
				<section class="menu contact">
					<div>
						<h2>Formulaire de contact :</h2>	
						<?php
		
						$sex = ($_POST['sex']);
						$name = ($_POST['name']);
						$age = ($_POST['age']);
						$email = ($_POST['email']);
						$subject = ($_POST['subject']);
						$message = ($_POST['message']);
						$catsocial = ($_POST['catsocial']);

						$mailto = 'Blokit26@gmail.com'; 
						$message = "Sexe : $sex\r\nName : $name\r\nAge : $age\r\nEmail : $email\r\nMessage : $message\r\nCatégorie Sociale : $catsocial";
						$error_message = 'Une erreur est survenue !'; 
						$success_message = 'Message envoyé !'; 
								
						function validateEmail($email) {
	   						if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
		  						return true;
	 					    else
		 						 return false;
							}

							if((strlen($name) < 1 ) || (strlen($email) < 1 ) || (strlen($message) < 1 ) || validateEmail($email) == FALSE || $age < 0) {

								echo '<p class="red" >'.$error_message.'</p>';

							} else {

								if(mail($mailto, $subject, $message)) {
			
									echo '<p class="green" >'.$success_message.'</p>';

								} else {

										echo '<p class="red" >'.$error_message.'</p>';

							  }   }?>
					</div>	  						
				</section>	
			</article>
			<footer>
				<p>Copyrights Reserved 2020 - Vicente Spada</p>
			</footer>
			<script src="../js/app.js"></script>
		</body>
	</html>
	