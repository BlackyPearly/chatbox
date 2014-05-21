<?php						  
							   /****************************************************/
							   /**	      Copyright (c) 2013 Blacky TM         ****/
                               /**          Touts droit réservés               ***/
                               /**     ChatBox écrit par Blacky de A à Z       **/
                               /**            Hazeryon-multigaming             */     
                            /******************************************************/
					        /**				    ChatBox beta v0.1               **/
                            /****************************************************/




include("cosql.php"); 
// On se prépare à inseré dans la table chatbox , les speudo et message envoyés
$post_msg = $table -> prepare('INSERT INTO chatbox (pseudo, message) VALUES(?, ?)');

// on demande à sotcker dans les champs Pseudo et message ce que l'user à poster
$post_msg -> execute(array($_POST['pseudo'], $_POST['message']));

// Revenir à la chatbox à chaque opération
header('Location: ../chatbox.php');

?>

