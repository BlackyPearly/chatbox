<?php						  
							   /****************************************************/
							   /**	      Copyright (c) 2013 Blacky TM         ****/
                               /**          Touts droit réservés               ***/
                               /**     ChatBox écrit par Blacky de A à Z       **/
                               /**            Hazeryon-multigaming             */     
                            /******************************************************/
					        /**				    ChatBox beta v0.1               **/
                            /****************************************************/

?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8" />
				<title id="hazeryon">Chatbox</title>
					<?php include('script/browser_update.php'); ?>
						<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
							<!--[if lte IE7]><link rel="stylesheet" href="style_ie.css" /><![endif]-->
								<link rel="stylesheet" href="style/style.css" />
							 		<?php include("script/prefixfree.min.php") ; ?>
										</head>


		<body>
			<!-- Connexion à base de donnée MySQL -->
			<?php include('includes/cosql.php'); ?>
			<!-- Affiche les derniers messages -->
			<?php include('includes/lastmsg.php'); ?>
			<!-- Script alerte compatibilité navigateur html5/css3 -->
			<?php include('script/browser_update.php'); ?>

			<div class="form">
				<!-- Création du form qui dirige le submit clique vers chatbox_post.php -->
		  	  	<form action="includes/chatbox_post.php" method="post">
			        <p>
			        <label for="pseudo" >Pseudo</label> : 
			        <input type="text" name="pseudo" class='pseudo' required>
			        <label for="message" >Message</label> :  
			        <input type="text" name="message" class='message'required>
			        <input class="textSubmit" type="submit" value="Envoyer" />
			        </p>
		    	</form>
			</div>
	    </body>

	</html>

