<?php						  
							   /****************************************************/
							   /**	      Copyright (c) 2013 Blacky TM         ****/
                               /**          Touts droit réservés               ***/
                               /**     ChatBox écrit par Blacky de A à Z       **/
                               /**            Hazeryon-multigaming             */     
                            /******************************************************/
					        /**				    ChatBox beta v0.1               **/
                            /****************************************************/



// Stocke les 10 derniers msg classé du dernier au premier dans la varible $table msg
$table_msg = $table -> query('SELECT pseudo, message FROM chatbox ORDER BY ID DESC LIMIT 0, 10');

// Sotck la dernière ligne de la table dans $last_msg
while ($last_msg = $table_msg->fetch())
{
		// tant qu'il de ligne , ecrire à chaque fois le speudo et le message envoyé par l'user
        echo "<div class='pseudo'>".htmlspecialchars($last_msg['pseudo']). ":</div> <div class='message'>".htmlspecialchars($last_msg['message']).'<br>';
}

// Ferme la base de donnée avec le pointeur à la fin $table_msg ->
// closeCursor();

?>