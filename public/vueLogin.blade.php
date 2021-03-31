<form method="POST" action="http://localhost/laravel5/public/login" accept-charset="UTF-8">

@csrf
<label for="pseudo">Entrez votre pseudo ! : </label>    
<input name="pseudo" type="text" id="pseudo">   

<label for="mdp">Entrez votre mot de passe ! : </label>    
<input  minlength ="3" name="pass" type="text" id="mdp"> 

<input type="submit" value="Envoyer !">	
</form>