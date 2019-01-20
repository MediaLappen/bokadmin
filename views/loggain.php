
<div class="container">
	<h1>Logga In</h1>

	<form action="loggain/run" method="post">
  		
  		<div class="form-group">
    		<label for="emailAdress">E-post Adress</label>
    		<input type="email" class="form-control" id="emailAdress" aria-describedby="emailHelp" placeholder="Skriv in din Epost" name= "email">
    		<small id="emailHelp" class="form-text text-muted">Använd din epost för att logga in</small>
  		</div>
  
		<div class="form-group">
    		<label for="passwordString">Lösenord</label>
    		<input type="password" class="form-control" id="passwordString" placeholder="Lösenord" name="password">
  		</div>

  		<button type="submit" class="btn btn-primary">Logga In</button>

	</form>

</div><!-- end of container-->

