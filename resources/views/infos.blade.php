<form method="POST" action="http://localhost/laravel5/public/users" accept-charset="UTF-8">

	@csrf
	<label for="nom">Entrez votre nom ! : </label>    
	<input name="nom" type="text" id="nom">    
	<input type="submit" value="Envoyer !">	
</form>