<?php						  
							   /****************************************************/
							   /**	      Copyright (c) 2013 Blacky TM         ****/
                               /**          Touts droit réservés               ***/
                               /**     ChatBox écrit par Blacky de A à Z       **/
                               /**            Hazeryon-multigaming             */     
                            /******************************************************/
					        /**				    ChatBox beta v0.1               **/
                            /****************************************************/



	try
		{
			 //Nom d'hôte , base de donnée, login, password,,              et activation des erreurs
			$table = new PDO('mysql:host=localhost; dbname=test2', 'root','');
		}
		catch (exception $executes)
		{
			die('Erreur : ' . $executes -> getmessage());
		}

?>